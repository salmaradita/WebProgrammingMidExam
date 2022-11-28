@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Book List</h4>
        </div>
    </div>

    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-3 order-1">
            <div class="card">
            <img src="{{ asset($book->image) }}" class="card-img-top" alt="bookcover1">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="author">by <strong>{{ $book->author }}</strong></p>
                    <a href="{{ url ('book_detail', $book->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
