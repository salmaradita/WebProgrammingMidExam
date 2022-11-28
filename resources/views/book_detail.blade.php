@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Book Cover</h4>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3">
            <img src="{{ $book->image }}" class="w-full" alt="bookcover1">
            <div class="card-body">
                <p class="card-text">Title: {{ $book->title }}</p>
                <p class="card-text">Author: {{ $book->author }}</p>
                <p class="card-text">Year: {{ $book->year}}</p>
                <p class="card-text">Synopsis: {{ $book->synopsis}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
