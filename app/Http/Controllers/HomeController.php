<?php

namespace App\Http\Controllers;
use App\Models\Books;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view ('home', compact('books'));
    }

    public function bookdetail($id)
    {
        $book = Books::where('id', $id)->first();
        return view('book_detail', compact('book'));
    }
}


