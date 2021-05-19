<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, CategoryController, BlogController, ContactController};

// HOME
Route::get('/', [HomeController::class, 'index'])->name('site.home');

// PRODUTOS
Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.products.category');

// BLOG
Route::get('blog', [BlogController::class, 'index'])->name('site.blog');

//SOBRE
Route::get('sobre', function () {
    return view('site.about.index');
})->name('site.about');

//CONTATO
Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');