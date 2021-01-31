<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleTwo extends Model
{
    use HasFactory;

    public function handle()
    {
        die('it works');
    }
}
