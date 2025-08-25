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
            background: color-mix(in srgb, var(--background-color), transparent 30%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .banner .container {
            position: relative;
            z-index: 3;
        }

        main {
            background: #f1f4fa;
        }

        .shop-checkout {
            background-image: url('assets/images/hero-bg.png');
        }

        .page-title {
            font-size: 2.75rem;
            font-weight: 800;
            margin-bottom: 2.5rem;
            text-align: center;
            background: linear-gradient(135deg, #e9985a 0%, #764ba2 100%);
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .checkout-steps {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .checkout-steps__item {
            flex: 1 1 220px;
            text-align: center;
            border: 2px solid #e2e8f0;
            padding: 1.5rem 1rem;
            border-radius: 16px;
            color: #4a5568;
            background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
        }

        .checkout-steps__item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background-color:  #ff4a17;
            /* background: linear-gradient(90deg, #f88055 0%, #ee9446 100%); */
            /* background: linear-gradient(90deg, #667eea 0%, #764ba2 100%); */
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .checkout-steps__item:hover,
        .checkout-steps__item.active {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 10px 10px -5px rgba(0, 0, 0, 0.1);
        }

        .checkout-steps__item:hover::before,
        .checkout-steps__item.active::before {
            transform: scaleX(2);
        }



        .checkout-steps__item-number {
            font-size: 1.5rem;
            font-weight: 900;
            display: block;
            margin-bottom: 0.75rem;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            background-color:  #ff4a17;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .checkout-steps__item-title span {
            display: block;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .checkout-steps__item-title em {
            font-size: 0.85rem;
            color: #718096;
            font-style: normal;
        }

        /* Cart Table */
        .cart-table__wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-table th {
            background-color: black;
            color: rgb(229, 226, 226);
            font-weight: 700;
            text-align: center;
            align-items: center;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            height: 50px;
        }

        .cart-table td {
            padding: 1.5rem 1.25rem;
            text-align: left;
            vertical-align: middle;
            border-bottom: 1px solid #e2e8f0;
        }

        .cart-table tbody tr {
            transition: all 0.3s ease;
        }

        .cart-table tbody tr:hover {
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
            transform: scale(1.005);
        }

        .qty-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: #f7fafc;
            border-radius: 12px;
            padding: 0.25rem;
            border: 2px solid #e2e8f0;
            width: max-content;
        }

        .qty-control__number {
            width: 50px;
            padding: 0.5rem;
            border: none;
            background: white;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .qty-control__reduce,
        .qty-control__increase {
            cursor: pointer;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            background: linear-gradient(135deg, #ea9f66 0%, #ff4a17 100%);
            color: white;
            padding: 0.5rem 0.75rem;
            border-radius: 8px;
            user-select: none;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .qty-control__reduce:hover,
        .qty-control__increase:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .shopping-cart__product-item img {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            width: 7.9rem;
            height: 6.9rem;
            margin: 20px;
        }

        .shopping-cart__product-item__detail h4 {
            margin: 0 0 0.5rem 0;
            font-size: 1.1rem;
            font-weight: 700;
            color: #2d3748;
        }

        .shopping-cart__product-item__options {
            list-style: none;
            padding-left: 0;
            margin: 0;
            color: #718096;
            font-size: 0.875rem;
        }

        .shopping-cart__product-item__options li {
            background: #f7fafc;
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            margin: 0.125rem 0.25rem 0.125rem 0;
            border: 1px solid #e2e8f0;
        }

        .shopping-cart__product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #121317;
        }


        .shopping-cart__subtotal {
            font-size: 1.25rem;
            font-weight: 700;
            color: #16211b;
        }

        .remove-cart svg {
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0.5rem;
            background: #fed7d7;
            border-radius: 50%;
            width: 32px;
            height: 32px;
        }

        .cart-table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
            border-radius: 0 0 20px 20px;
            margin-top: -1px;
        }

        .cart-table-footer form {
            flex: 1;
            position: relative;
            max-width: 350px;
        }

        .cart-table-footer input.form-control {
            width: 100%;
            padding: 0.75rem 1.25rem;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            background: white;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .cart-table-footer input.form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .cart-table-footer input[type="submit"] {
            border: none;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            color: white;
            font-weight: 700;
            cursor: pointer;
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .cart-table-footer input[type="submit"]:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-light {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            border: 2px solid #e2e8f0;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .btn-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
        }

        /* Totals */
        .shopping-cart__totals {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
            border: none;
            padding: 2rem;
            border-radius: 20px;
            max-width: 450px;
            margin: auto;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .shopping-cart__totals h3 {
            margin-bottom: 1.5rem;
            font-size: 1.75rem;
            font-weight: 800;
            color: #2d3748;
            text-align: center;
            padding-bottom: 1rem;
            border-bottom: 3px solid  #ff4a17;
        }

        .cart-totals th,
        .cart-totals td {
            padding: 1rem 0;
            text-align: left;
            font-size: 1rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .cart-totals th {
            font-weight: 600;
            color: #4a5568;
        }

        .cart-totals td {
            font-weight: 700;
            color: #2d3748;
        }

        .cart-totals tr:last-child th,
        .cart-totals tr:last-child td {
            border-bottom: none;
            font-size: 1.25rem;
            color: black;
            padding-top: 1.5rem;
        }

        .form-check {
            margin-bottom: 0.75rem;
        }

        .form-check-label {
            margin-left: 0.75rem;
            font-size: 0.95rem;
            color: #4a5568;
        }

        .menu-link {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .menu-link:hover {
            color: #764ba2;
        }

        .btn-checkout {
            width: 100%;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 800;
            border-radius: 12px;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            background: linear-gradient(135deg, #ea9f66 0%, #ff4a17 100%);
            border: none;
            color: white;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 15px -3px rgba(102, 126, 234, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-checkout:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }

        .btn-checkout:active {
            transform: translateY(-1px);
        }

        /* Empty Cart Styling */
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .empty-cart h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #718096;
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .shop-checkout {
                padding: 1rem 0.5rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .checkout-steps {
                flex-direction: column;
                gap: 1rem;
            }

            .checkout-steps__item {
                padding: 1.25rem;
            }

            .cart-table th,
            .cart-table td {
                padding: 1rem 0.75rem;
                font-size: 0.9rem;
            }

            .cart-table-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .cart-table-footer form {
                max-width: none;
            }

            .shopping-cart__totals {
                margin-top: 2rem;
                padding: 1.5rem;
            }

            .qty-control {
                gap: 0.25rem;
            }

            .qty-control__number {
                width: 50px;
                padding: 0.4rem;
                text-align: center;
            }

            .qty-control__reduce,
            .qty-control__increase {
                padding: 0.4rem 0.6rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {

            .cart-table th:nth-child(n+4),
            .cart-table td:nth-child(n+4) {
                display: none;
            }

            .cart-table th,
            .cart-table td {
                padding: 0.75rem 0.5rem;
            }
        }

        /* Animation for loading states */
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .loading {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
@endpush

@section('content')
    <section id="banner" class="banner section dark-background">
        <img src="assets/img/main-bg.jpg">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="100">Cart Locked and Loaded.</h2>
            <p class="subtitle mt-3 " data-aos="fade-up" data-aos-delay="200">Finalize your choices and let us handle the
                rest.
            </p>
    </section>
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <div class="shop-checkout container">

            <div class="checkout-steps">
                <a href="javascript:void(0)" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </a>
                <a href="{{ route('checkout') }}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </a>
                <a href="{{ route('order') }}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
                    </span>
                </a>
            </div>
            <div class="shopping-cart">
                @if ($items->count() > 0)
                    <div class="cart-table__wrapper">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th>Unit-price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>
                                            <div class="shopping-cart__product-item">
                                                <img src="{{ asset('images/' . $item->model->image) }}" width="120"
                                                    height="120" alt="{{ $item->name }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="shopping-cart__product-item__detail">
                                                <h4>{{ $item->name }}</h4>
                                                <ul class="shopping-cart__product-item__options">
                                                    <li>Color: Yellow</li>
                                                    <li>Size: L</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="shopping-cart__product-price">Rs/- {{ $item->price }}</span>
                                        </td>
                                        <td>
                                            <div class="qty-control">
                                                <div class="qty-control__reduce">-</div>
                                                <input type="number" name="quantity" value="{{ $item->qty }}"
                                                    min="1" class="qty-control__number">
                                                <div class="qty-control__increase">+</div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="shopping-cart__subtotal">Rs/- {{ $item->subtotal() }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="remove-cart">❌</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="cart-table-footer">
                            <a href="{{ route('products') }}" class="btn btn-light">Continue Shopping</a>
                            <a href="javascript:void(0)" id="clear-cart" class="btn btn-light">Clear Cart</a>

                            {{-- <form action="#" class="position-relative bg-body">
                                <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
                                <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit"
                                    value="APPLY COUPON">
                            </form> --}}
                            {{-- <button class="btn btn-light">UPDATE CART</button>
                             --}}
                            <a href="{{ route('checkout') }}"class="btn btn-light">Confirm Order</a>
                        </div>
                    </div>
                   <div class="shopping-cart__totals-wrapper">
                        <div class="shopping-cart__totals">
                            <h3>Cart Totals</h3>
                            <table class="cart-totals">
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td id="subtotal-cell">Rs/- 0</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <th>VAT (10%)</th>
                                        <td id="vat-cell">Rs/- 0</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td id="total-cell">Rs/- 0</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('checkout') }}" class="btn btn-outline-primary btn-checkout">
                                PROCEED TO CHECKOUT
                            </a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <h2>NO ITEMS </h2>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </main>
    @push('scripts')
 <script>
            function updateCartTotals() {
                let subtotal = 0;

                document.querySelectorAll('.cart-table tbody tr').forEach(row => {
                    const qtyInput = row.querySelector('.qty-control__number');
                    const priceText = row.querySelector('.shopping-cart__product-price');
                    const subtotalText = row.querySelector('.shopping-cart__subtotal');

                    if (!qtyInput || !priceText || !subtotalText) return;

                    const qty = parseInt(qtyInput.value) || 1;
                    const price = parseFloat(priceText.textContent.replace('Rs/-', '').trim()) || 0;

                    const productSubtotal = qty * price;
                    subtotalText.textContent = `Rs/- ${productSubtotal.toFixed(1)}`;

                    subtotal += productSubtotal;
                });

                const vat = subtotal * 0.10; // 18% VAT
                const total = subtotal + vat;

                document.getElementById('subtotal-cell').textContent = `Rs/- ${subtotal.toFixed(1)}`;
                document.getElementById('vat-cell').textContent = `Rs/- ${vat.toFixed(1)}`;
                document.getElementById('total-cell').textContent = `Rs/- ${total.toFixed(1)}`;
            }

            // Run on page load
            document.addEventListener("DOMContentLoaded", updateCartTotals);

            // Run when quantity changes
            document.addEventListener("input", function(e) {
                if (e.target.classList.contains("qty-control__number")) {
                    updateCartTotals();
                }
            });

            // Run when plus/minus clicked
            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("qty-control__increase")) {
                    const input = e.target.parentElement.querySelector(".qty-control__number");
                    input.value = parseInt(input.value) + 1;
                    updateCartTotals();
                }
                if (e.target.classList.contains("qty-control__reduce")) {
                    const input = e.target.parentElement.querySelector(".qty-control__number");
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                        updateCartTotals();
                    }
                }
            });

            // Clear cart
            document.getElementById("clear-cart").addEventListener("click", function() {
                document.querySelector(".cart-table tbody").innerHTML = "";
                updateCartTotals();
            });
        </script>
    @endpush

@endsection
