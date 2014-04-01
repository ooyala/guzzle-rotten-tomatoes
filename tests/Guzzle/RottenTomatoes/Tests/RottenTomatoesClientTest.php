<?php

namespace Guzzle\RottenTomatoes\Tests;

use Guzzle\RottenTomatoes\RottenTomatoesClient;

class RottenTomatoesClientTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testBuilderCreatesClient()
    {
        $client = RottenTomatoesClient::factory(array(
            'apikey' => $_SERVER['API_KEY']
        ));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testBuilderValidatesCreatesClient()
    {
        $client = RottenTomatoesClient::factory(array());
    }
}