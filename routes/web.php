<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Livewire\SearchArticles;
use App\Livewire\UsersSearch;
use App\Models\Article;
use Illuminate\Support\Facades\Route;


// Homapage
Route::get('/',[App\Http\Controllers\BaseController::class, 'welcome'])->name('homepage');

//Articoli
//Route::get('/articoli', [App\Http\Controllers\BaseController::class, 'articoli'])->name('articoli');
Route::get('/articles', [App\Http\Controllers\BaseController::class, 'articles'])->name('articles');

//ANIME
Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'genres'])->name('anime');
Route::get('/anime/genre/{genre_id}', [App\Http\Controllers\AnimeController::class, 'byGenre'])->name('anime.byGenre');
Route::get('/anime/{anime_id}/{genre_id}', [App\Http\Controllers\AnimeController::class, 'show'])->name('anime.show');

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

//modifica articolo
Route::get('/articles/edit/{article}',[App\Http\Controllers\ArticleController::class, 'edit'])->middleware('auth')->name('articles.edit');
Route::put('/articles/update/{article}',[App\Http\Controllers\ArticleController::class, 'update'])->middleware('auth')->name('articles.update');

//elimina articolo
Route::delete('/articles/delete/{article}',[App\Http\Controllers\ArticleController::class, 'destroy'])->middleware('auth')->name('articles.destroy');

Route::resource('categories', CategoryController::class)->middleware('auth')->except('show');


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

Route::get('/counter', function() {

    return view('PagCounter');
});

Route::get('/utenti/ricerca', UsersSearch::class);

Route::get('/ricerca/articoli', SearchArticles::class);

Route::get('/admin/utenti', [App\Http\Controllers\AdminController::class, 'users'])->middleware('auth')->name('admin.users');