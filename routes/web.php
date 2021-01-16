<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::get('/about-us', function(){
    return view('about-us', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show');
Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');


// Route::get('/articles', function(){
//     return view('articles', [
//         'articles' => App\Models\Article::take(3)->latest()->get()
//     ]);
// });