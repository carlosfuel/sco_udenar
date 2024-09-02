<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',[PrimerControlador::class,'index']);

//Route::get('test2',[App\Http\Controllers\SegundoControlador::class,'index']);
//Route::resource('post', PrimerControlador::class);

Route::get('otro/{post?}/{otro?}',[PrimerControlador::class, 'otro']);

