<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        return view('contac', ['name' => 'Carlos Alberto' ]);
    }

    function otro($post=20, $otro=-79){
        echo $post;
        echo $otro;
    }
}
