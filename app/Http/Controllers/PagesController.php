<?php

namespace App\Http\Controllers;

// use Facade\FlareClient\View;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(\App\Models\Example $example)
    {
        // ddd($example);

        // LARAVEL FACADES
        // return view('welcome');
        // This is the same functionaly as above
        // return request('name');
        return View::make('welcome');
    }
}
