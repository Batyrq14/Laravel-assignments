<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $message = "Hello, this is Batyrkhan";

        return view('assignment', compact('message'));
    }
}
