@extends('layouts.dashboard')

@section('content')
    <h2>Create Order (Admin Side)</h2>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>User ID</label>
            <input type="number" name="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Total Price</label>
            <input type="number" name="total_price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
@endsection
