<?php

namespace App\Http\Controllers\MyData;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function test(){
    	return response()->view('welcome');
    }
}
