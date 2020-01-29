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


    function update_post($id, Request $request){
     $id_post = post::findorfail($id);    

        post::where('id', '=', $id_post->id)
        ->update(['title'=>$request->title,
            'post' => $request->post
        ]);

        return redirect('/posts');
    }
}
