<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;

Route::get('/', function () {
    $authors = Author::with('books')->get();
    return view('welcome', compact('authors'));
});