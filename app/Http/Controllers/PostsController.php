<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($post){
        $posts = [
            '123' => 'Hewwo'
        ];

        if(!array_key_exists($post, $posts))
        {
            abort(404);
        }else{
            return view('post', [
                'post' => $posts[$post]
            ]);
        }
    }
}
