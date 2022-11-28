<?php

namespace App\Http\Controllers;
use App\Models\Publisher;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisher()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    public function publisherdetail($id)
    {
        $publisher = Publisher::where('id', $id)->first();
        return view('publisher_detail', compact('publisher'));
    }
}
