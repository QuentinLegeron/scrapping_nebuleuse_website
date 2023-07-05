<?php

namespace Quentinlegeron\Nebuleuse;

use Symfony\Component\DomCrawler\Crawler;


class Api
{
    public function scrapeWebsite(): array {
        $url =  'https://nebuleusebijoux.com/collections/piercings';

        $html = file_get_contents($url);

        $crawler = new Crawler($html);

        $links = $crawler->filter('div.product-item__image-wrapper > a')->each(function (Crawler $node, $i) {
            return $node->text();
        });        

        return $links;
    }

}

?>
