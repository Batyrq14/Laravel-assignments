<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Book;

Route::get('/authors', function () {
    $authors = Author::all();
    return view('authors', compact('authors'));
});

Route::get('/books', function () {
    $books = Book::all();
    return view('books', compact('books'));
});

Route::get('/', function () {
    $authors = Author::with('books')->get();
    return view('welcome', compact('authors'));
});