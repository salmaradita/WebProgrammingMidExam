@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Name      : {{ $publisher->name }}</h4>
            <h4>Address   : {{ $publisher->address }}</h4>
            <h4>Phone     : {{ $publisher->phone }}</h4>
            <h4>Email     : {{ $publisher->email }}</h4>

        </div>
    </div>

    <div class="row">
      @foreach($publisher->books as $book)
      <div class="col order-1">
        <div class="card">
          <img src="{{ asset ($book->image) }}" class="card-img-top" alt="bookcover1">
          <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="">{{ $book->author }}</p>
            <p class="author"></p>
            <a href="{{ url('book_detail', $book->id) }}" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
