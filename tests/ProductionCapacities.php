<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

class ProductionCapacitiesTest extends TestCase
{
    public function testGET()
    {
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET','http://127.0.0.1:8000/api/production_capacities');
        $this->assertEquals(200, $res->getStatusCode());
    }

    public function testPOST()
    {
        $client = new \GuzzleHttp\Client(['headers' => [ 'Content-Type' => 'application/json' ]]);
        
        $body = array(
            'amount' => 100,
            'productionUnit' => 'http://127.0.0.1:8000/api/production_units/1',
            'timeUnit' => 'http://127.0.0.1:8000/api/time_units/1',
            'productGroup' => 'http://127.0.0.1:8000/api/product_groups/1'
        );

        $res = $client->request('POST','http://127.0.0.1:8000/api/production_capacities',['body' => json_encode($body)]);
        $this->assertEquals(201, $res->getStatusCode());

    }
}