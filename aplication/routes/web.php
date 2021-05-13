<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('site.home');

// PRODUTOS
Route::get('produtos', 'App\Http\Controllers\CategoryController@index')->name('site.products');
Route::get('produtos/{slug}', 'App\Http\Controllers\CategoryController@show')->name('site.products.category');

// BLOG
Route::get('blog', 'App\Http\Controllers\BlogController@index')->name('site.blog');

//SOBRE
Route::get('sobre', function () {
    return view('site.about.index')->name('site.about');
})->name('site.about');

//CONTATO
Route::get('contato', 'App\Http\Controllers\ContactController@index')->name('site.contact');
Route::post('contato', 'App\Http\Controllers\ContactController@form')->name('site.contact.form');