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

}
