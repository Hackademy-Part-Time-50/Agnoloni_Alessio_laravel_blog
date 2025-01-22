<?php

use Illuminate\Support\Facades\Route;

// Homapage
Route::get('/',[App\Http\Controllers\BaseController::class, 'welcome'])->name('homepage');

//Articoli
Route::get('/articoli', [App\Http\Controllers\BaseController::class, 'articoli'])->name('articoli');

//Articolo singolo 

Route::get('/articolo/{id}',[App\Http\Controllers\BaseController::class, 'articolo'])->name('articolo');

//Chi siamo / chi sono
Route::get('/chi-siamo', [App\Http\Controllers\BaseController::class, 'About_us'])->name('about_us');

//chi siamo dettagli

Route::get('/gruppo{id}', [App\Http\Controllers\BaseController::class, 'Details_About_us'])->name('Info_membro');

// contatti
Route::get('/contatti', [App\Http\Controllers\ContactController::class, 'form'])->name('contacts');
Route::post('/contatti',[App\Http\Controllers\ContactController::class, 'receive'])->name('contacts.receive');