<?php

namespace App\Http\Controllers;

use App\post;

class likesController extends Controller
{
    //
    public function update_page_likes($id){

       $post = post::findOrFail($id);
       $like = $post->likes + 1;
    
        post::where('id', '=', $id)->update(['likes'=> $like]);

      return redirect('/posts');

    }
}
