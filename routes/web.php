<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$dbGroup = function() {
    Route::middleware(['CheckUser'])->group(function () {
        Route::any('/', 'IndexController@test');
    });
};

Route::namespace('Mydata')->group($dbGroup);
