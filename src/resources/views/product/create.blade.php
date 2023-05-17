@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1>{{ $data }}</h1>
        <div class="col col-md-6">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            {{-- <form action="{{ route('product.action.create') }}" method="POST"> --}}
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
