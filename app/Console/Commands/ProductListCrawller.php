<?php

namespace App\Console\Commands;

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
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->client = new Client();
    }

    /**
     * Execute the console command.
     *
     * @param ScrapperServices $scrapperServices
     * @return int
     */
    public function handle(ScrapperServices $scrapperServices)
    {
        // https://sabziman.com || https://bokala.ir
        $url = $this->argument('url');
        $categoryId = $this->argument('categoryId');
        $crawler = $this->client->request('GET', $url);
        $links = $crawler->filter('a.img');
        $links = $links->each(function($node){
            return $node->attr('href');
        });
        $data['category_id'] = $categoryId;
        foreach ($links as $link) {
            $crawler = $this->client->request('GET', $link);
            $data['cover'] = $crawler->filter('a.venobox img')->eq(1)->attr('src');
            $data['name'] = $crawler->filter('div.col-lg-8 h1')->first()->text();
            $price = $crawler->filter('bdi')->first();
            $data['price'] = $price->count() ? str_replace([' ','تومان'], '', $price->text()) : 0;
            $weight = $crawler->filter(1'.woocommerce-product-details__short-description strong')->first();
            $data['weight'] = $weight->count() ? $weight : 0;
            $data['description'] = $crawler->filter('#tab-description')->first()->text();
            $scrapperServices->setModel(new Product);
            $entity = $this->initRow($data);
            $scrapperServices->setEntity($entity);
            $scrapperServices->save();
            dump($data);
        }

        // @TODO add new product
        // @TODO assign to product category

        return 0;
    }

    public function initRow($data): array
    {
        return [
            'deleted' => 0,
            'status' => 'Available',
            'part_number' => 'sku-' . rand(12345, 9999),
            'cost_price' => null,
            'pricing_type' => 'Same as List',
            'pricing_factor' => 0.0,
            'list_price' => $data['price'],
            'unit_price' => $data['price'],
            'category_id' => $data['category_id'],
            'cost_price_currency' => 'IRR',
            'list_price_currency' => 'IRR',
            'unit_price_currency' => 'IRR',
        ];
    }
}
