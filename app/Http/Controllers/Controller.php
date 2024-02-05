<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController  // StydlyCase
{
    public function firstAction() // cmaelCase
    {
        $books = ['PHP','Javascript','CSS'];
        $name = 'Mahmoud';
        return view('test.test',['books'=>$books,'name'=>$name]);
    }
}
