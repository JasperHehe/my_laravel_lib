<?php

namespace App\Http\Controllers\MyData;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function test(){
        Redis::set('user', 'wangming');
        $d = Redis::get('user');
        
        dd($d);
    	return response()->view('welcome');
    }
}
