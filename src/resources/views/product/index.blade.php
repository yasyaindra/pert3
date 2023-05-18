@extends('layouts.layout')

@section('content')
    <div class="container mt-5 mx-auto">
        <h1>{{ $data }}</h1>
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <a href="{{ route('product.create') }}" class="btn btn-success mb-4">Create New Product</a>
        <table class="table col-lg-6">
            <thead>
                <tr class="text-center">
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="text-center">
                        <td>{{ $product->name }}</td>
                        <td>
                            <a href="/product/{{ $product->id }}" target="_blank" class="btn btn-primary">Detail</a>
                            <a href="/product/{{ $product->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/product/{{ $product->id }}/delete" method="POST" id="form-delete"
                                class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
