@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Category</h4>
        </div>
    </div>


    <div class="row">
        @foreach ($books as $book)
        <div class="card mb-3 w-25">
            <img src="{{ asset($book->books->image) }}" class="w-full" alt="bookcover1">
            <div class="card-body">
                <p class="card-text">Title: {{ $book->books->title }}</p>
                <p class="card-text">Author: {{ $book->books->author }}</p>
                <a href="{{ url('book_detail', $book->books->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
