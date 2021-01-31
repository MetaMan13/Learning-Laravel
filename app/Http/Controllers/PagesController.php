<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(\App\Models\Example $example)
    {
        ddd($example);
    }
}
