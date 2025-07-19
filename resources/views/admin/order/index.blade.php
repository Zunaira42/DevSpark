@extends('layouts.dashboard')
@section('content')
    <div class="card-body">
        <div class="container-fluid">
            <div class="row mb-3 ">
                <div class="col-6">
                    <h2>Order</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('orders.create') }}" class="btn btn-danger">Create</a>
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
                                            <th>User_id</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->user_id }}</td>
                                                <td>{{ $order->total_price }}</td>
                                                <td>{{ $product->status}}</td>
                                                <td> <a href="{{ route('orders.edit', $order->id) }}">
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
