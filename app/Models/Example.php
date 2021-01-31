<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    
    /*
    The section below was commented out because the simplified method within the route file
    */

    // protected $foo;

    // public function __construct($foo)
    // {
    //     $this->foo = $foo;
    // }

    protected $collaborator;
    protected $foo;

    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }

    public function go()
    {
        dump('work');
    }
}
