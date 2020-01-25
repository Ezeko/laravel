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

    function create_post(Request $request){

        $post = new post();

        $post->title = $request->title;
        $post->username = $request->username;
        $post->post = $request->post;
        $post->user_id =$request->user_id;
        $post->post_created_at = $request->post_crreated_at;

        $post::save();


    }
}
