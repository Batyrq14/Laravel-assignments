<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AssignmentController;

Route::get('/assignment2', [AssignmentController::class, 'index']);

