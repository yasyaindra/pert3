@extends('layouts.layout')

@section('content')
    <div class="container mt-5 mx-auto">
        <h1>{{ $data }}</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">{{ $product->name }} adalah Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    In, repellendus.</p>
                <a href="/" class="btn btn-primary">Add To Cart</a>
                <a href="/product" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
@endsection
