@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1>{{ $data }}</h1>
        <div class="col col-md-6">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('password.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="password" class="form-label">Old Password</label>
                    <input type="password" class="form-control" id="password" name="old_password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="new_password">
                </div>
                <div class="mb-3">
                    <label>New Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="new_password_confirmation" />
                </div>
                <button type="submit" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
