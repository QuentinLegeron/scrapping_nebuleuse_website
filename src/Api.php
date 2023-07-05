<?php

namespace Quentinlegeron\Nebuleuse;

use Symfony\Component\DomCrawler\Crawler;


class Api
{
    /**
     * @return string[]
     */
    public function scrapeWebsite(): array {
        $url =  'https://bindingofisaacrebirth.fandom.com/wiki/Items';

        $html = (string)file_get_contents($url);

        $crawler = new Crawler($html);

        $links = $crawler->filter('tr.row-collectible > td:first-child > a')->each(function (Crawler $node, $i) {
            return $node->text();
        });        

        return $links;
    }

}

?>
