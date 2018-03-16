<?php

namespace App\Http\Controllers\MyData;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    public function test(){
        Redis::set('user', 'wangming');
        $d = Redis::get('user');
        
        $m = Redis::command('set', ['hah', 'hello']);
        
        dd(Redis::connection());
        dd(Redis::get('hah'));
        dd($d);
    	return response()->view('welcome');
    }
    
    public function alltest(){
    	Redis::pipeline(function($pipe){
    		for($i = 0; $i <= 10; $i ++){
    			$pipe->set("testkey:$i", $i);
    		}
    	});
    	
    	echo "success";
    }
}
