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

        #checkout p {
            font-size: 40px;
            font-weight: 700;
            text-decoration: underline;
        }

        #checkout .info {
            font-size: 21px;
            font-weight: 600;
            border: 2px solid black;
            border-radius: 35px;
            padding: 0px 9px;
            width: 230px;
        }

        #checkout .info:hover {
            background-color: rgb(225, 225, 225);
        }

        #checkout .input-group-text {
            width: 110px;
        }

        .btn:hover {
            background-color: blue;

        }

        @media (max-width: 768px) {
            .input-group-text {
                width: 120px;

            }

            #checkout .info {
                font-size: 18px;
            }

        }
    </style>
@endpush
@section('content')
    <section id="banner" class="banner section dark-background">
        <img src="assets/img/main-bg.jpg" alt="" data-aos="fade-in">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-delay="100"> Almost There!</h1>
            <p data-aos="fade-up" data-aos-delay="200">Just one more step to get your order delivered.
            </p>
    </section>

    <div id="checkout" class="checkout section light-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf

                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="info">Customer Information</div>
                                <label for="name" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">Name</span>
                                    <input type="name" name="name" class="form-control" placeholder="Put your Name"
                                        required>
                                </div>


                                <label for="email" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">E-mail</span>
                                    <input type="email" name="email" class="form-control" placeholder="Put your Email"
                                        required>
                                </div>

                                <label for="phone_num" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">Phone Num</span>
                                    <input type="text" name="phone_num" class="form-control"
                                        placeholder="Put your Phone_num" required>
                                </div>
                                <div class="info mt-3">Shipping Address</div>
                                <label for="address" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">Address</span>
                                    <input type="" name="address" class="form-control" placeholder="Put your address"
                                        required>
                                </div>

                                <label for="payment_method" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">Pay-method</span>
                                    <select name="payment_method" class="form-select" required>
                                        <option value="">Select</option>
                                        <option value="card">Credit Card</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                                <label for="city" class="form-label"></label>
                                <div class="input-group">
                                    <span class="input-group-text">City</span>
                                    <select name="city" class="form-select" required>
                                        <option value="">Select</option>
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
                                <label for="state" class="form-label"></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">State</span>
                                    <input type="text" name="state" id="state" class="form-control"
                                        placeholder="e.g., Punjab" required>
                                </div>
                                <label for="zip" class="form-label"></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Postel / ZIP</span>
                                    <input type="text" name="zip" id="zip" class="form-control"
                                        placeholder="e.g., 54000" required>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-space-between mt-3 mb-5 mx-3 ">
                                <button type="submit" class="btn btn-danger ">Submit</button>

                                <button type="submit" class="btn btn-danger mx-5">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
