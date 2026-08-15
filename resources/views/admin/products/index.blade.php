@extends('layouts.dashboard')
@section('content')
    <div class="card-body">
        <div class="container-fluid">
            <div class="row mb-3 ">
                <div class="col-6">
                    <h2>Products</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('products.create') }}" class="btn btn-danger">Create</a>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Product-Name</th>
                                            <th>Price</th>
                                            <th>Is Best Product</th>
                                            <th>Stock</th>
                                            <th>View </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->is_best_product ? 'Yes' : 'No' }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td> <a href="{{ route('products.edit', $product->id) }}">
                                                        <i class="bi bi-eye-fill"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
