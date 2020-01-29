<?php

namespace App\Http\Controllers;

use App\Like;
use App\post;
use Illuminate\Http\Request;

class likesController extends Controller
{
    //
    public function update_page_likes(Request $request){
        // check if user has liked the post
        $check = Like::where('user_id', $request->user_id)
                        ->where('post_id', $request->post_id)
                        ->where('isLiked', true)
                        ->get();
        if (count($check) > 0){
            Like::where('user_id', $request->user_id)
            ->where('post_id', $request->post_id)
            ->where('isLiked', true)
            ->update(['isLiked' => false]);

            $post = post::findOrFail($request->post_id);
       $like = $post->likes - 1;
    
        post::where('id', '=', $request->post_id)->update(['likes'=> $like]);

           return redirect('/posts');

        }
        else{
            //insert into like table
        $like = new Like;

        $like->user_id = $request->user_id;
        $like->post_id = $request->post_id;
        $like->isLiked = true;

        $like->save();



       $post = post::findOrFail($request->post_id);
       $like = $post->likes + 1;
    
        post::where('id', '=', $request->post_id)->update(['likes'=> $like]);

        

      return redirect('/posts');
        }

    }
}
