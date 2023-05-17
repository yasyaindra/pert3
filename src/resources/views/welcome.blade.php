@extends('layouts.layout')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/post.webp') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/sempiternal.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/spirit.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-5">
        @guest
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-success" href="{{ route('register') }}">Register</a>
        @endguest
        @auth
            <h1>Welcome, <b>{{ Auth::user()->name }}!</b></h1>
            <div class="d-flex flex-row">
                <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
                <a class="btn btn-danger mx-3" href="{{ route('logout') }}">Logout</a>
            </div>
        @endauth
    </div>
@endsection
