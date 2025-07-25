@extends('app.layouts.app')

@section('content')
<div class="container orders-page">
    <h2 class="mb-5 text-center">🛒 Your Orders</h2>

    @if($orders->count())
        @foreach($orders as $order)
            <div class="order-card mb-4 p-4 border rounded shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    {{-- Order status --}}
                    <span class="badge
                        {{
                            $order->status === 'pending' ? 'bg-warning text-dark' :
                            ($order->status === 'completed' ? 'bg-success' : 'bg-danger')
                        }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>

                {{-- Order details --}}
                <p><strong>Total Price:</strong> Rs. {{ number_format($order->total_price, 2) }}</p>
                <p><strong>Placed on:</strong> {{ $order->created_at->format('d M Y, h:i A') }}</p>

                {{-- Items --}}
                <h6 class="mt-4 mb-3">Items:</h6>
                <div class="row">
                    @foreach($order->items as $item)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('storage/' . ($item->product->image ?? 'default.png')) }}"
                                     class="card-img-top" alt="{{ $item->product->name ?? 'Product' }}"
                                     style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->product->name ?? 'N/A' }}</h5>
                                    <p class="card-text">
                                        <strong>Quantity:</strong> {{ $item->quantity }}<br>
                                        <strong>Price:</strong> Rs. {{ number_format($item->price, 2) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center">
            <h4>No orders found.</h4>
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Browse Products</a>
        </div>
    @endif
</div>
@endsection
