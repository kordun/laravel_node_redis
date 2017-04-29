<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redis;

class TestRedisController extends Controller
{
    public function test(){
    	return Redis::publish("test:channel1", json_encode(["name" => "Test from channel One"]));
    }

}
