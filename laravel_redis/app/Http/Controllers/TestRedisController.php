<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redis;

class TestRedisController extends Controller
{
    public function test(){
    	return Redis::publish("activity:new", json_encode(["name" => "Test from channel One"]));
    }

}
