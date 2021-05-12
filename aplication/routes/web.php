<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', 'App\Http\Controllers\HomeController@index');

// PRODUTOS
Route::get('produtos', 'App\Http\Controllers\CategoryController@index');
Route::get('produtos/{slug}', 'App\Http\Controllers\CategoryController@show');

// BLOG
Route::get('blog', 'App\Http\Controllers\BlogController@index');

//SOBRE
Route::get('sobre', function () {
    return view('site.about.index');
});

//CONTATO
Route::get('contato', 'App\Http\Controllers\ContactController@index');
Route::post('contato', 'App\Http\Controllers\ContactController@form');