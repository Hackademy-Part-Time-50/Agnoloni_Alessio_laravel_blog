<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

// Homapage
Route::get('/',[App\Http\Controllers\BaseController::class, 'welcome'])->name('homepage');

//Articoli
//Route::get('/articoli', [App\Http\Controllers\BaseController::class, 'articoli'])->name('articoli');
Route::get('/articles', [App\Http\Controllers\BaseController::class, 'articles'])->name('articles');

//Chi siamo / chi sono
Route::get('/chi-siamo', [App\Http\Controllers\BaseController::class, 'About_us'])->name('about_us');

//chi siamo dettagli

Route::get('/gruppo{id}', [App\Http\Controllers\BaseController::class, 'Details_About_us'])->name('Info_membro');

// contatti
Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'form'])->name('contacts');
Route::post('/contatti',[App\Http\Controllers\ContactController::class, 'receive'])->name('contacts.receive');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'dashboard'])->middleware('auth')->name('account.dashboard');


Route::get('/articles/index',[App\Http\Controllers\ArticleController::class, 'index'])->middleware('auth')->name('articles.index');

Route::get('/articles/create',[App\Http\Controllers\ArticleController::class, 'create'])->middleware('auth')->name('articles.create');
Route::post('/articles/store',[App\Http\Controllers\ArticleController::class, 'store'])->middleware('auth')->name('articles.store');

//Articolo singolo 

//Route::get('/articolo/{id}',[App\Http\Controllers\BaseController::class, 'articolo'])->name('articolo');
Route::get('/articles/{article}',[App\Http\Controllers\BaseController::class, 'article'])->name('article');

// Route::get('/model',function () { 

//     \App\Models\Article::create([
        
//     'title' => 'Articolo#1',
//     'category' => 'PHP',
//     'description' => 'PHP (acronimo ricorsivo di "PHP: Hypertext Preprocessor", preprocessore di ipertesti; originariamente acronimo di "Personal Home Page"[1]) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.',

//     ]);
// });