<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
