<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Models\Example;

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

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
// Implementing named routes
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');
// Service containers
/* 
    Everything associated with the example blowe is just to get da feet wet man
*/
// Route::get('/services', function(){
//     $container = new App\Models\Container();
//     $container->bind('example', function(){
//         return new Example();
//     });
//     $example = $container->resolve('example');
//     // ddd($example);
//     $example->go();
// });

// AFTER ADDING THE $foo property to the example class we would need to do it this way

// app()->bind('App\Models\Example', function(){
//     // LONGER WAY
//     // $foo = config('services.foo');
//     // return new \App\Models\Example($foo);
//     $collaborator = new \App\Models\Collaborator();
//     $foo = "mihihihi";

//     // MORE SIMPLIFIED WAY
//     return new \App\Models\Example($collaborator, $foo);
// });

// The function argument for the service-provides route is the SIMPLIFIED WAY NUMBER TWO
Route::get('/service-providers', function(\App\Models\Example $example){
    // SIMPLIFIED WAY NUMBER ONE -> Unable to find the right words to explain how awesome and magic laravel is !!! 5 out of 5 stars
    // $example = resolve(App\Models\Example::class);
    // For the example right above -> the line below is translate to exactly the same as below
    // $example = app()->make(\App\Models\Example::class);
    ddd($example);
});

Route::get('/resolve-two', '\App\Http\Controllers\PagesController@home');

Route::get('/contact', '\App\Http\Controllers\ContactController@show');
Route::post('/contact', '\App\Http\Controllers\ContactController@store');