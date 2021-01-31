<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $bindings = [];

    // Methods
    public function bind($key, $value){
        $this->bindings[$key] = $value;
    }

    public function resolve($key)
    {
        if(isset($this->bindings[$key])){
            return call_user_func($this->bindings[$key]);
        }
    }
}
