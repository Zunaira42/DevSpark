@extends('layouts.dashboard')
@push('style')
    <style>

    </style>
@endpush

@section('content')
    <div class="card-body">
        <div class="container-fluid">
            <div class="row mb-3 ">
                <div class="col-6">
                    <h2>Checkout</h2>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('checkouts.create') }}" class="btn btn-danger">Create</a>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- Content --}}
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
                                            {{-- <th>order-#</th> --}}
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone_num</th>
                                            <th>Address </th>
                                            <th>Pay-method</th>
                                            {{-- <th>city</th>
                                            <th>state</th>
                                            <th>zip</th> --}}
                                            <th>view</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($checkouts as $checkout)
                                            <tr>
                                                <td>{{ $checkout->id }}</td>
                                                {{-- <td>{{ $checkout->order_id }}</td> --}}
                                                <td>{{ $checkout->name }}</td>
                                                <td>{{ $checkout->email }}</td>
                                                <td>{{ $checkout->phone_num }}</td>
                                                <td>{{ $checkout->address }}</td>
                                                <td>{{ $checkout->payment_method }}</td>
                                                {{-- <td>{{ $checkout->city }}</td>
                                                <td>{{ $checkout->state }}</td>
                                                <td>{{ $checkout->zip }}</td> --}}
                                                <td> <a href="{{ route('checkouts.edit', $checkout->id) }}">
                                                        <i class="bi bi-eye-fill"></i>
                                                 </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    {{-- <div class="col-12 text-end mt-4">
                        <button class="btn btn-danger align-item-end">Edit</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- EndContent --}}
@endsection
