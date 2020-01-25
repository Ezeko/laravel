<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //make home controller
    function index(){
        
        return view('welcome');
    }

    function page(){
        $posts = post::all();
        return view('page',[ 'posts' => $posts]);

    }
}
