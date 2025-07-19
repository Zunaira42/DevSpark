@extends('app.layouts.app')

@push('styles')
    <style>
        #banner.banner {
            width: 100%;
            min-height: 45vh;
            position: relative;
            padding: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -1.2rem;
        }

        #banner img {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 400px;
            object-fit: cover;
            z-index: 1;
        }

        .banner:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 50%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .banner .container {
            position: relative;
            z-index: 3;
        }

        .cart .heading {

            font-size: 40px;
            font-weight: 700;
            margin-top: 25px;
        }

        .cart .item {
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            padding: 15px;
            background-color: #ffffff;
            /* background-color:transparent; */
            transition: transform 0.2s ease-in-out;
            margin-bottom: 50px;
        }

        .cart .item:hover {
            transform: scale(1.01);
        }

        .cart .text {
            font-size: 24px;
            font-weight: 600;
            color: #343a40;
        }

        .cart .description {
            font-size: 16px;
            color: #6c757d;
        }

        .cart .total-price {
            font-size: 18px;
            font-weight: 700;
            color: #28a745;
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

        .text-cart {
            color: black !important;
            font-size: 25px;
            font-weight: 700;
            text-align: center;
            border: 2px solid #343a40;
            width: 315px;
            padding: 0px 40px;
            border-radius: 18px;
        }

        a {
            color: black;
        }

        .text-cart:hover {
            background-color: #2876a7;
        }

        @media (max-width: 768px) {
            .container {
                width: 120% !important;
            }

            .cart .cart-item {
                height: 565px;
            }

            .cart .img-fluid {
                height: 275px;
                width: 95%;
            }
        }
    </style>
@endpush

@section('content')
    <section id="banner" class="banner section dark-background">
        <img src="assets/img/main-bg.jpg" alt="" data-aos="fade-in">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-delay="100">Review Your Items <br>Before Checkout</h1>
            <p data-aos="fade-up" data-aos-delay="200">Check your selected items, update quantities, and <br> proceed to
                secure checkout.</p>
    </section>

    @php $cart = session()->get('cart'); @endphp
    <div id="cart" class="cart section light-background">
        <div class="row d-md-flex justify-content-md-center">
            <div class="col-12">
                <div class="cart-items p-4 rounded">
                    @if ($cart)
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    @foreach ($cart as $key => $item)
                                        <div class="item">
                                            <div class="row mb-3 align-items-center">
                                                <div class="col-md-5">
                                                    <img src="{{ asset('images/' . $item['image']) }}"
                                                        class="img-fluid rounded">
                                                </div>
                                                <div class="col-md-7 text-center">
                                                    <h2 class="text text-decoration-underline">{{ $item['name'] }}</h2>
                                                    <p class="description">" {{ $item['description'] }}"</p>

                                                    <p class="total-price" id="total-price-{{ $key }}">
                                                        Total Price: RS/- <span
                                                            id="total-amount-{{ $key }}">{{ $item['price'] * $item['quantity'] }}</span>
                                                    </p>

                                                    <div class="quantity-section">
                                                        <p style="display: inline-block; margin-right: 10px;">Quantity:</p>
                                                        <div class="quantity-controls">
                                                            <button type="button" class="quantity-btn"
                                                                onclick="updateQuantity('{{ $key }}', -1, {{ $item['price'] }})">-</button>
                                                            <input type="number" class="quantity-input"
                                                                id="quantity-{{ $key }}"
                                                                value="{{ $item['quantity'] }}" min="1" readonly>
                                                            <button type="button" class="quantity-btn"
                                                                onclick="updateQuantity('{{ $key }}', 1, {{ $item['price'] }})">+</button>
                                                        </div>
                                                    </div>
                                                    <div class="button mt-4">
                                                        <input type="checkbox" class="btn-check select-checkbox"
                                                            id="select-{{ $key }}" name="selected_products[]"
                                                            value="{{ $key }}" autocomplete="off"
                                                            data-price="{{ $item['price'] * $item['quantity'] }}">
                                                        <label class="btn btn-success w-75"
                                                            for="select-{{ $key }}">Select
                                                            to Buy</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center sticky-top  mb-5"
                                        style="top: 80px; background-color: white; padding: 20px; border-radius: 15px; box-shadow: 0 0 10px rgba(0,0,0,0.1); z-index: 1;">

                                        <h4 class="mt-5">Selected Total:&nbsp;&nbsp;&nbsp; <span id="selected-total">RS
                                                0</span></h4>
                                        <a href="{{ route('checkout') }}" class="btn btn-primary px-5 py-2 mt-3">Buy
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="text-cart mx-auto">
                            <a href="{{ route('home') }}">Your cart is empty.</a>
                        </div>
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
            if (newQuantity < 1) newQuantity = 1;

            quantityInput.value = newQuantity;
            const newTotalPrice = (unitPrice * newQuantity).toFixed(2);
            totalAmountSpan.textContent = newTotalPrice;

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
                        updateCartTotal();
                        updateSelectedTotal();
                    }
                })
                .catch(error => {
                    console.error('Error updating quantity:', error);
                    quantityInput.value = currentQuantity;
                    totalAmountSpan.textContent = (unitPrice * currentQuantity).toFixed(2);
                });
        }

        function updateCartTotal() {
            let cartTotal = 0;
            const totalAmountElements = document.querySelectorAll('[id^="total-amount-"]');
            totalAmountElements.forEach(element => {
                cartTotal += parseFloat(element.textContent);
            });
        }

        function updateSelectedTotal() {
            let total = 0;
            document.querySelectorAll('.select-checkbox:checked').forEach(cb => {
                total += parseFloat(cb.dataset.price);
            });
            document.getElementById('selected-total').textContent = 'RS ' + total.toFixed(2);
        }

        // ✅ Ensure this runs after DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.select-checkbox').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    updateSelectedTotal();
                    const label = document.querySelector(`label[for="${checkbox.id}"]`);
                    if (checkbox.checked) {
                        label.innerText = '✅ Selected!';
                        label.classList.remove('btn-success');
                        label.classList.add('btn-primary');
                    } else {
                        label.innerText = 'Select to Buy';
                        label.classList.remove('btn-primary');
                        label.classList.add('btn-success');
                    }
                });
            });
        });

        function updateQuantity(itemKey, change, unitPrice) {
            const quantityInput = document.getElementById('quantity-' + itemKey);
            const totalAmountSpan = document.getElementById('total-amount-' + itemKey);
            const checkbox = document.getElementById('select-' + itemKey);

            let currentQuantity = parseInt(quantityInput.value);
            let newQuantity = currentQuantity + change;
            if (newQuantity < 1) newQuantity = 1;

            quantityInput.value = newQuantity;
            const newTotalPrice = (unitPrice * newQuantity).toFixed(2);
            totalAmountSpan.textContent = newTotalPrice;

            // ✅ Update the checkbox data-price dynamically
            checkbox.dataset.price = newTotalPrice;

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
                        updateCartTotal();
                        updateSelectedTotal();
                    }
                })
                .catch(error => {
                    console.error('Error updating quantity:', error);
                    quantityInput.value = currentQuantity;
                    totalAmountSpan.textContent = (unitPrice * currentQuantity).toFixed(2);
                });
        }
    </script>
@endsection
