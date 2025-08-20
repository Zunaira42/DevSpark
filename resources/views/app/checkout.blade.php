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

    #checkout .section-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        border-bottom: 2px solid #ddd;
        padding-bottom: 5px;
    }

    #checkout .info-label {
        font-size: 16px;
        font-weight: 600;
        margin-top: 15px;
    }

    .input-group-text {
        width: 140px;
        font-weight: 600;
    }

    .btn {
        min-width: 150px;
    }

    .btn:hover {
        background-color: blue;
        color: #fff;
    }

    @media (max-width: 768px) {
        .input-group-text {
            width: 120px;
        }
    }
</style>
@endpush

@section('content')
<section id="banner" class="banner section dark-background">
    <img src="assets/img/main-bg.jpg" alt="Checkout Banner" data-aos="fade-in">
    <div class="container text-center">
        <h1 data-aos="fade-up" data-aos-delay="100">Almost There!</h1>
        <p data-aos="fade-up" data-aos-delay="200">Just one more step to get your order delivered.</p>
    </div>
</section>

<div id="checkout" class="checkout section light-background py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form action="{{ route('checkout.store') }}" method="POST" class="card shadow-sm">
                    @csrf
                    <div class="card-body">

                        <!-- Customer Information -->
                        <div class="section-title">Customer Information</div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Phone</span>
                            <input type="text" name="phone_num" class="form-control" placeholder="Enter your phone number" required>
                        </div>

                        <!-- Shipping Information -->
                        <div class="section-title">Shipping Address</div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Address</span>
                            <input type="text" name="address" class="form-control" placeholder="Street, House #, Area" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">City</span>
                            <select name="city" class="form-select" required>
                                <option value="">Select City</option>
                                <option value="karachi">Karachi</option>
                                <option value="lahore">Lahore</option>
                                <option value="islamabad">Islamabad</option>
                                <option value="rawalpindi">Rawalpindi</option>
                                <option value="faisalabad">Faisalabad</option>
                                <option value="multan">Multan</option>
                                <option value="quetta">Quetta</option>
                                <option value="peshawar">Peshawar</option>
                                <option value="gujranwala">Gujranwala</option>
                                <option value="sialkot">Sialkot</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">State</span>
                            <input type="text" name="state" class="form-control" placeholder="e.g., Punjab" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Postal Code</span>
                            <input type="text" name="zip" class="form-control" placeholder="e.g., 54000" required>
                        </div>

                        <!-- Payment -->
                        <div class="section-title">Payment Method</div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Payment</span>
                            <select name="payment_method" class="form-select" required>
                                <option value="">Select Method</option>
                                <option value="cod">Cash on Delivery</option>
                                <option value="card">Credit Card</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" class="btn btn-outline-primary">Place Order</button>
                            <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
