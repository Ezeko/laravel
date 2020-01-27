<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostUpdateController extends Controller
{
    //updating posts

    function find_post($id){

        $post = post::findorfail($id);

        return view('update', ['post'=> $post]);

    }


    function update_post(Request $request){
       $post = new post;
       
       $post->title = $request->title;
        $post->username = $request->username;
        $post->post = $request->post;
        $post->user_id =$request->user_id;
        $post->updated_at= $request->updated_at;

        post::where('id', '=', '$request->user_id')->update(['title'=>$post->title ]);

        return redirect('/posts');
    }
}
