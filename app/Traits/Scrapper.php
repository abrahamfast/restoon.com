<?php


namespace App\Traits;


use App\Helper\StrHelper;

trait Scrapper
{


    protected function sabziman($crawler)
    {
        $links = $crawler->filter('a.img');

        return  $links->each(function($node){
            return $node->attr('href');
        });
    }

    protected function bokala($crawler)
    {
        $links = $crawler->filter('.before_content_product_catalog a');

        return $links->each(function($node){
            return $node->attr('href');
        });
    }

    /**
     *
     * @param $link
     * @return array
     */
    protected function fetchDataFromBokala($link): array
    {
        $crawler = $this->client->request('GET', $link);

        $data['cover'] = $crawler->filter('.woocommerce-product-gallery__image img')->first()->attr('src');
        $data['name'] = $crawler->filter('.product_title h1')->first()->text();
        $price = $crawler->filter('.nk_main_add_to_cart_box .price .woocommerce-Price-amount  bdi')->first();
        $price = $price->count() ? str_replace([',', '&nbsp;','تومان'], '', $price->text()) . "0" : 0;
        $data['price'] = StrHelper::convertEn($price);
        $data['weight'] = 0;
        $data['description'] = '';

        return $data;

    }

    /**
     *
     * @param $link
     * @return array
     */
    protected function fetchDataFromSabziman($link): array
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

}
