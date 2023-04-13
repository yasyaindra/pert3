@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1>Profile!</h1>
        <div class="card flex-row">
            <img src="{{ asset('img/saul.png') }}" class="card-img-top w-50" alt="..." height="200px"
                style="object-fit: cover">
            <div class="card-body w-50 align-items-center">
                <h5 class="card-title">Indra Maulana Yasya</h5>
                <p class="card-text">NIM: 20190801079</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
