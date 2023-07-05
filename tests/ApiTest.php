<?php

use PHPUnit\Framework\TestCase;
use Quentinlegeron\Nebuleuse\Api;

class ApiTest extends TestCase
{
    public function testScrapeWebsite(): void
    {
        $api = new Api();
        $this->assertIsArray($api->scrapeWebsite());
    }
}

?>