<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redis;

class TestRedisController extends Controller
{
    public function test(){
    	return Redis::publish("new-activity:planrep", json_encode(["name" => "Procurement of bricks"]));
    }

}
