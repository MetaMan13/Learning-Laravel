<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($slug){
       
        // Fetching from database
        $post = \DB::table('posts')->where('slug', $slug)->first();

        
        if($post == null){
            abort(404);
        }else{
            // dd($post->id);

            return view('post', [
                'post_id' => $post->id,
                'post_slug' => $post->slug,
                'post_body' => $post->body
            ]);
        }
    }
}
