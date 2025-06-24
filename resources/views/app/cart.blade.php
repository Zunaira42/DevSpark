@extends('app.layouts.app')
@push('styles')
    <style>
        .cart .heading {
            font-size: 40px;
            font-weight: 700;
            text-decoration: underline;
        }

        .cart .item {
            border: 3px solid rgb(28, 23, 23);
            margin-bottom: 50px;
            height: 300px;
        }

        .cart .img-fluid {
            height: 275px;
            width: 100%;
            margin: 10px;
        }

        .item p {
            font-size: 18px;
            font-weight: 700;
        }

        .price {
            color: red;
        }

        .description {
            font-size: 25px;
            font-weight: 700;
        }

        .total-price {
            color: #28a745;
            font-size: 20px;
            font-weight: 700;
        }

        .quantity-controls {
            display: inline-flex;
            align-items: center;
            border: 2px solid #333;
            border-radius: 5px;
            overflow: hidden;
            background: white;
        }

        .quantity-btn {
            background: #f8f9fa;
            border: none;
            width: 35px;
            height: 35px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.2s;
        }

        .quantity-btn:hover {
            background: #9cb2c8;
        }

        .quantity-btn:active {
            background: #dee2e6;
        }

        .quantity-input {
            border: none;
            width: 50px;
            height: 35px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            outline: none;
            background: white;
        }

        .quantity-input::-webkit-outer-spin-button,
        .quantity-input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .quantity-input[type=number] {
            -moz-appearance: textfield;
        }

        .btn:hover {
            background-color: blue;
            border: 3px solid white;
        }

        @media (max-width: 768px) {
            .container {
                width: 120% !important
            }

            .cart .item {
                height: 565px;
            }

            .cart .img-fluid {
                height: 275px;
                width: 92%;
                /* margin: 10px; */
            }


        }
    </style>
@endpush

@section('content')
    <div id="cart" class="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <p>My Cart</p>
                    </div>
                </div>
            </div>

            @php
                $cart = session()->get('cart');
            @endphp

            <div class="row  d-md-flex justify-content-md-center">
                <div class="col-10">
                    <div class="cart-items p-4 rounded">
                        @if ($cart)
                            @foreach ($cart as $key => $item)
                                <div class="item">
                                    <div class="row mb-5 align-items-center">
                                        <div class="col-md-5">
                                            <img src="{{ asset('images/' . $item['image']) }}" class="img-fluid rounded ">
                                        </div>
                                        <div class="col-md-7  text-center">
                                            <h2 class="text  text-decoration-underline">{{ $item['name'] }}</h2>
                                            <p class="description">" {{ $item['description'] }}"</p>
                                            {{-- <p class="price">Unit Price: ${{ $item['price'] }}</p> --}}
                                            <p class="total-price" id="total-price-{{ $key }}">Total
                                                Price:&nbsp;&nbsp; RS/-&nbsp;<span
                                                    id="total-amount-{{ $key }}">{{ $item['price'] * $item['quantity'] }}</span>
                                            </p>
                                            <div class="quantity-section">
                                                <p style="display: inline-block; margin-right: 10px;">Quantity:</p>
                                                <div class="quantity-controls">
                                                    <button type="button" class="quantity-btn"
                                                        onclick="updateQuantity('{{ $key }}', -1, {{ $item['price'] }})">-</button>
                                                    <input type="number" class="quantity-input"
                                                        id="quantity-{{ $key }}" value="{{ $item['quantity'] }}"
                                                        min="1" readonly>
                                                    <button type="button " class="quantity-btn"
                                                        onclick="updateQuantity('{{ $key }}', 1, {{ $item['price'] }})">+</button>

                                                </div>


                                            </div>
                                            <a href="{{ route('buy.now.redirect') }}" class="btn btn-success mt-4">BUY
                                                NOW</a>
                                            <button type="cancel"class="btn btn-danger mt-4">Cancel </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-white">Your cart is empty.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateQuantity(itemKey, change, unitPrice) {
            const quantityInput = document.getElementById('quantity-' + itemKey);
            const totalAmountSpan = document.getElementById('total-amount-' + itemKey);

            let currentQuantity = parseInt(quantityInput.value);
            let newQuantity = currentQuantity + change;

            // Minimum quantity should be 1
            if (newQuantity < 1) {
                newQuantity = 1;
            }

            // Update quantity display
            quantityInput.value = newQuantity;

            // Update total price display
            const newTotalPrice = (unitPrice * newQuantity).toFixed(2);
            totalAmountSpan.textContent = newTotalPrice;

            // AJAX call to update quantity in session/database
            fetch('/update-cart-quantity', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        item_key: itemKey,
                        quantity: newQuantity,
                        total_price: newTotalPrice
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Quantity and price updated successfully');
                        // Optional: Update cart total or other UI elements
                        updateCartTotal();
                    }
                })
                .catch(error => {
                    console.error('Error updating quantity:', error);
                    // Revert changes on error
                    quantityInput.value = currentQuantity;
                    totalAmountSpan.textContent = (unitPrice * currentQuantity).toFixed(2);
                });
        }

        // Optional: Function to update overall cart total
        function updateCartTotal() {
            let cartTotal = 0;
            const totalAmountElements = document.querySelectorAll('[id^="total-amount-"]');

            totalAmountElements.forEach(element => {
                cartTotal += parseFloat(element.textContent);
            });

            // If you have a cart total display element, update it here
            // document.getElementById('cart-total').textContent = cartTotal.toFixed(2);
            console.log('Cart Total:1')

        }
    </script>

@endsection
