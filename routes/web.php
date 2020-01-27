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

    
Route::get('/', 'HomeController@index');

Route::get('/api', function(){
    $reslt = ["name" => "John",
                "class" =>" k.g",
                "Location"=> "Lokoja"
];
   return response($contents = $resl = $reslt , $status = 200 , $headers=[]);
   
});

Route::get('/posts','PostsController@page');

Route::post('/create_post', 'PostsController@create_post');

Route::get('/post/{id}', 'PostsController@view')->where('id', '[0-9]+');

Route::put('/update', 'PostUpdateController@update_post');

Route::match(['get', 'delete'],'/delete/{id}', 'PostsController@delete_post')->where('id', '[0-9]+');

Route::get('/edit/{id}', 'PostUpdateController@find_post')->where('id', '[0-9]+');