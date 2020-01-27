<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostsController extends Controller
{
    //controllers that handles various requests
    
    function page(){
        $posts = post::all()->sortByDesc('post_created_at');
        return view('page',[ 'posts' => $posts]);

    }

    function create_post(Request $request){

        $post = new post();

        $post->title = $request->title;
        $post->username = $request->username;
        $post->post = $request->post;
        $post->user_id =$request->user_id;
        $post->post_created_at = $request->post_created_at;

        $post->save();

        return redirect('/posts');


    }

    function view($id){

        $post = post::findOrFail($id);

        return view('post',['post'=> $post]);

    }

    function delete_post($id){
        post::find($id)
        ->delete();

        return redirect('/posts');
    }
}
