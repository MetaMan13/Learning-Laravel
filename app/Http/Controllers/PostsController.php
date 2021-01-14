<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    public function show($slug){
       
        // Fetching from database
        // $post = \DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();

        
        if($post == null){
            abort(404);
        }else{
            return view('post', [
                'post' => $post
            ]);
        }
    }
}
