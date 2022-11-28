<?php

namespace App\Http\Controllers;
use App\Models\BookCategory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function bookcategories($categories)
    {
        $books = BookCategory::with('books')->where('categories_id', $categories)->get();
        return view('category', compact('books'));
    }
}
