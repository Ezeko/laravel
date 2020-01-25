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

use PHPUnit\Util\Json;

    
Route::get('/', 'HomeController@index');

Route::get('/api', function(){
    $reslt = ["name" => "John",
                "class" =>" k.g",
                "Location"=> "Lokoja"
];
   return response($contents = $resl = $reslt , $status = 200 , $headers=[]);
   
});

route::get('/a','HomeController@page');
