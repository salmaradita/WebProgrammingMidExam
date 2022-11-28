<?php

namespace App\Http\Controllers;
use App\Models\BookCategory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $books = BookCategory::all();
        return view ('category', compact('books'));
    }

    public function bookcategories($category)
    {
        $books = BookCategory::with('books')->where('category_id', $category)->get();
        return view('category', compact('books'));
    }
}
