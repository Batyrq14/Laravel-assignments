<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'      => 'required|string',
            'surname'   => 'required|string',
            'birthdate' => 'required|date',
        ]);

        Author::create($validated);

        return redirect()->route('authors.index');
    }
}
