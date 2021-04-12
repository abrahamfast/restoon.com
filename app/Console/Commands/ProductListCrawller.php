<?php

namespace App\Console\Commands;

use App\Helper\StrHelper;
use App\Models\Attachment;
use App\Models\Product;
use App\Services\ScrapperServices;
use App\Traits\Scrapper;
use Illuminate\Console\Command;
use Goutte\Client;

class ProductListCrawller extends Command
{
    use Scrapper;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:product {url} {categoryId} {site}';

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
        $url = $this->argument('url');
        $site = $this->argument('site');
        $this->category_id = $this->argument('categoryId');

        $crawler = $this->client->request('GET', $url);

        $links = $this->{$site}($crawler);


        $bar = $this->output->createProgressBar(count($links));
        $bar->start();

        $rows = [];

        foreach ($links as $link) {

            switch ($site){
                case('bokala'):
                    $data = $this->fetchDataFromBokala($link);
                    break;
                case('sabziman'):
                    $data = $this->fetchDataFromSabziman($link);
                    break;
                default:
                    $this->error('site not founded!');
                    break;
            }

            $bar->advance();
            $entity = $this->initRow($data);

            $product = $this->create($entity);
            $this->storeCover($data['cover'], $product->id);

            $rows[] = [$product['id'], $product['name']];
        }

        $bar->finish();
        $this->info("done.");
        $this->table(
            ['id', 'name'],
            $rows
        );

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
