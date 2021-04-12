<?php

namespace App\Console\Commands;

use App\Helper\StrHelper;
use App\Models\Attachment;
use App\Models\Product;
use App\Services\ScrapperServices;
use Illuminate\Console\Command;
use Goutte\Client;

class ProductListCrawller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:product {url} {categoryId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'crawler new product from list';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var ScrapperServices
     */
    private $scrapperServices;

    private $filePath;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ScrapperServices $scrapperServices)
    {
        parent::__construct();
        $this->client = new Client();
        $this->scrapperServices = $scrapperServices;
        $this->filePath = env('FILE_STORE_PATH');
    }

    /**
     * Execute the console command.
     *
     * @param ScrapperServices $scrapperServices
     * @return int
     */
    public function handle()
    {
        // https://sabziman.com || https://bokala.ir
        $url = $this->argument('url');
        $categoryId = $this->argument('categoryId');
        $crawler = $this->client->request('GET', $url);
        $links = $crawler->filter('a.img');
        $links = $links->each(function($node){
            return $node->attr('href');
        });
        $this->category_id = $categoryId;
        foreach ($links as $link) {

            $data = $this->fetchData($link);
            $entity = $this->initRow($data);

            $product = $this->create($entity);
            $coverId = $this->storeCover($data['cover'], $product->id);


            dump($product->id);


        }

        // @TODO add new product
        // @TODO assign to product category

        return 0;
    }

    private function storeCover($cover, $productId)
    {


        $data = [
            'id' => StrHelper::uuId(),
            'name' => basename($cover),
            'deleted' => 0,
            'type' => 'image/jpeg',
            'size' => '',
            'field' => 'cover',
            'role' => 'Attachment',
            'storage' => '',
            'storage_file_path' => '',
            'global' => 0,
            'parent_id' => $productId,
            'parent_type' => 'Product',
        ];

        $file = $this->filePath . $data['id'];

        $fp = fopen ( $file , 'w+');
        //Here is the file we are downloading, replace spaces with %20
        $ch = curl_init($cover);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        // write curl response to file
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // get curl response
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);

        $data['size'] = filesize($file);

        return Attachment::create($data);
    }


    /**
     *
     * @param string $link
     * @return array
     */
    private function fetchData(string $link): array
    {
        $crawler = $this->client->request('GET', $link);

        $data['cover'] = $crawler->filter('a.venobox img')->eq(1)->attr('src');
        $data['name'] = $crawler->filter('div.col-lg-8 h1')->first()->text();
        $price = $crawler->filter('bdi')->first();
        $data['price'] = $price->count() ? str_replace([',', ' ','تومان'], '', $price->text()) . "0" : 0;
        $weight = $crawler->filter('.woocommerce-product-details__short-description strong')->first();
        $data['weight'] = $weight->count() ? $weight->text() : 0;
        $data['description'] = $crawler->filter('#tab-description')->first()->text();

        return $data;

    }

    protected function create($entity)
    {
        $this->scrapperServices->setModel(new Product);
        $this->scrapperServices->setEntity($entity);
        return $this->scrapperServices->save();
    }

    public function initRow($data): array
    {
        return [
            'id' => StrHelper::uuId(),
            'name' => $data['name'],
            'deleted' => 0,
            'status' => 'Available',
            'part_number' => 'sku-' . rand(12345, 9999),
            'pricing_type' => 'Same as List',
            'pricing_factor' => 0.0,
            'list_price' => $data['price'],
            'cost_price' => $data['price'],
            'unit_price' => $data['price'],
            'category_id' => $this->category_id,
            'description' => $data['description'],
            'cost_price_currency' => 'IRR',
            'list_price_currency' => 'IRR',
            'unit_price_currency' => 'IRR',
        ];
    }
}
