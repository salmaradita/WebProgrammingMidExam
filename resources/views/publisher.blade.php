@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Publisher</h4>
        </div>
    </div>

    <div class="row">
      @foreach ($publishers as $publisher)
      <div class="col-4 order-1">
        <div class="card">
        <img src="{{ $publisher->image }}" class="card-img-top" alt="bookcover1">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $publisher->name }}</strong></h5>
                <p class="card-text w-full">address: {{ $publisher->address  }}</p>
                <p class="card-text">phone: {{ $publisher->phone  }}</p>
                <p class="card-text">email: {{ $publisher->email  }}</p>
                <a href="{{ url('publisher_detail', $publisher->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection
