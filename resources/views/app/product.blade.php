@extends('app.layouts.app')

@push('styles')
    <style>
        #banner.banner {
            width: 100%;
            min-height: 85vh;
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
            height: 600px;
            object-fit: cover;
            z-index: 1;
        }

        .banner:before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .banner .container {
            position: relative;
            z-index: 3;
        }

        .card {
            border-radius: 10px;
            /* border: 2px solid rgb(19, 21, 19); */
            margin-top: -50px;
            /* background-color: #f5f6f5; */
            background-color: #f6f9ff;
            margin-bottom: -50px;
        }

        .product-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
        }

        .product .col-md-3 {
            margin-bottom: 20px;
        }

        .product-card {
            border: 2px solid black;
            border-radius: 15px;
            transition: border 0.3s ease, transform 0.3s ease;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            text-align: center;
            height: 450px;
        }

        .product-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-info {
            margin-top: 15px;
        }

        .product-title {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .product-price {
            color: green;
            font-size: 1rem;
            margin-top: 5px;
        }

        .product-description {
            font-size: 1.0rem;
            color: #555;
            margin-top: 5px;
            margin-bottom: 15px;

        }

        .product-buttons .btn {
            margin: 5px 3px;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .btn-cart {
            background-color: #f0ad4e;
            color: white;
        }

        .btn-cart:hover,
        .btn-buy:hover {
            background-color: #6c72ea;
            color: white;
        }

        .btn-buy {
            background-color: #5cb85c;
            color: white;
        }

        .btn-added {
            background-color: #0d1012 !important;
            color: #f7eaea !important;
            border: 1px solid #111314;
            transition: all 0.3s ease;
        }
    </style>
@endpush

@section('content')
    <section id="banner" class="banner dark-background">
        <img src="assets/img/sale.jpg" alt="" data-aos="fade-in">
    </section>

    {{-- products --}}
    <section id="products" class="product section light-background py-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3 ">
                                <div class="product-card  mt-3">
                                    <div class="product-img">
                                        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="product-info">
                                        <div class="product-title">{{ $product->name }}</div>
                                        <div class="product-price">RS/- &nbsp;{{ number_format($product->price, 2) }}</div>
                                        <div class="product-description text-center">
                                            {{ \Illuminate\Support\Str::limit($product->description, 70, '...') }}
                                        </div>
                                    </div>
                                    <div class="product-buttons mt-3">
                                        <form name="addtocart-form" method="POST" action="{{ route('cart.add') }}"
                                            class="d-inline add-to-cart-form">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <button type="submit" class="btn btn-cart">Add to Cart</button>
                                        </form>

                                        <a href="{{ route('checkout', $product->id) }}" class="btn btn-buy">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                        <a href="{{ route('cart.index') }}" class="btn btn-secondary" style="width: 20%;">Go To Cart </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        document.querySelectorAll('.add-to-cart-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const button = form.querySelector('.btn-cart');
                const formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),
                        },
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            button.disabled = true;
                            button.innerHTML =
                                `<i class="bi bi-check-circle me-1"></i> Added Successfully`;
                            button.classList.remove('btn-cart');
                            button.classList.add('btn-added');

                        } else {
                            button.textContent = "Error";
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        button.textContent = "Failed";
                    });
            });
        });
    </script>
@endpush
