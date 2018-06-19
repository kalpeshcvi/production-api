<?php

namespace App\Tests;
use PHPUnit\Framework\TestCase;

class TimeUnitsTest extends TestCase
{
    public function testGET()
    {
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET','http://127.0.0.1:8000/api/time_units');
        $this->assertEquals(200, $res->getStatusCode());
    }

    public function testPOST()
    {
        $client = new \GuzzleHttp\Client(['headers' => [ 'Content-Type' => 'application/json' ]]);
        $body = array('name' => 'daily');
        $res = $client->request('POST','http://127.0.0.1:8000/api/time_units',['body' => json_encode($body)]);
        $this->assertEquals(201, $res->getStatusCode());
    }
}