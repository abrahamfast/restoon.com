<?php

namespace App\Console\Commands;

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
     * @return int
     */
    public function handle()
    {
        // https://sabziman.com || https://bokala.ir
        $url = $this->argument('url');
        $crawler = $this->client->request('GET', $url);
        $links = $crawler->filter('a.img');
        $links = $links->each(function($node){
            return $node->attr('href');
        });

        foreach ($links as $link) {
            $crawler = $this->client->request('GET', $link);
            $data['cover'] = $crawler->filter('a.venobox img')->first()->attr('src');
            $data['name'] = $crawler->filter('div.col-lg-8 h1')->first()->text();
            $data['price'] = $crawler->filter('bdi')->first()->text();
            $data['weight'] = $crawler->filter('.woocommerce-product-details__short-description strong')->first()->text();
            $data['description'] = $crawler->filter('#tab-description')->first()->text();
            dd($data);
        }

        // @TODO add new product
        // @TODO assign to product category

        return 0;
    }
}
