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
            color: #fff;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
        }

        .banner h1 {
            font-weight: 700;
            font-size: 3.5rem;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .banner p {
            font-size: 1.2rem;
            opacity: 0.95;
            font-weight: 400;
        }

        /* Modern Section Background */
        #checkout {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            position: relative;
        }

        #checkout::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        /* Section Titles - Modern gradient text */
        #checkout .section-title {
            font-size: 1.75rem;
            font-weight: 800;
            background-color: #ff4a17;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 50px 0 30px 0;
            padding-bottom: 16px;
            border-bottom: 3px solid transparent;
            border-image: linear-gradient(90deg, #e9985a, #9c68d0) 1;
            display: flex;
            align-items: center;
            gap: 12px;
            position: relative;
        }

        /* Glassmorphism Card Design */
        .card {
            border: none;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px) saturate(180%);
            box-shadow:
                0 25px 45px rgba(0, 0, 0, 0.08),
                0 0 0 1px rgba(255, 255, 255, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899);
            border-radius: 24px 24px 0 0;
        }

        .card-body {
            padding: 3rem;
        }

        /* Modern Input Groups */
        .input-group {
            margin-bottom: 28px;
            position: relative;
        }

        .input-group-text {
            font-weight: 700;
            color: #475569;
            min-width: 140px;
            text-align: center;
            border-radius: 16px 0 0 16px;
            border: 2px solid rgba(99, 102, 241, 0.1);
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .form-control,
        .form-select {
            border-radius: 0 16px 16px 0;
            border: 2px solid rgba(99, 102, 241, 0.1);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
            padding: 0.8rem 1.2rem;
            font-size: 1rem;
        }


        .input-group:hover .form-control,
        .input-group:hover .form-select {
            background: rgba(255, 255, 255, 0.95);
        }

        .input-group {
            position: relative;
            overflow: visible;
        }

        .alert {
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 500;
            border: none;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .alert-danger {
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(220, 38, 38, 0.1) 100%);
            color: #dc2626;
            border-left: 4px solid #ef4444;
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.1);
        }

        @keyframes alertGlow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        .d-flex.justify-content-between {
            gap: 1.5rem;
            margin-top: 2.5rem;
        }

        .btn.loading {
            position: relative;
            color: transparent;
        }

        .btn.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid transparent;
            border-top-color: currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Responsive Enhancements */
        @media (max-width: 768px) {
            .banner h1 {
                font-size: 2.5rem;
            }

            .banner p {
                font-size: 1rem;
            }

            .card-body {
                padding: 2rem;
            }

            .input-group-text {
                min-width: 110px;
                font-size: 0.8rem;
                padding: 0.6rem;
            }

            .form-control,
            .form-select {
                padding: 0.7rem 1rem;
                font-size: 0.95rem;
            }

            #checkout .section-title {
                font-size: 1.4rem;
                margin: 35px 0 20px 0;
            }

            .btn {
                min-width: 140px;
                font-size: 1rem;
                padding: 0.8rem 1.5rem;
            }

            .d-flex.justify-content-between {
                flex-direction: column;
                gap: 1rem;
            }
        }

        @media (max-width: 480px) {
            .input-group {
                flex-direction: column;
                gap: 0;
            }

            .input-group-text {
                border-radius: 16px 16px 0 0;
                min-width: 100%;
                text-align: left;
                padding-left: 1rem;
            }

            .form-control,
            .form-select {
                border-radius: 0 0 16px 16px;
            }
        }

        .form-control:valid {
            border-color: #10b981;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2310b981' d='m2.3 6.73.94-.94 2.94 2.94'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
        }

        @media (prefers-reduced-motion: no-preference) {
            * {
                scroll-behavior: smooth;
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
                    @if (session('error'))
                        <div class="alert alert-danger mb-3">{{ session('error') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger mb-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('checkout.store') }}" method="POST" class="card shadow-sm">
                        @csrf
                        <div class="card-body">
                            <div class="section-title">Customer Information</div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" name="name" class="form-control" placeholder="Enter your full name"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email</span>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Phone</span>
                                <input type="text" name="phone_num" class="form-control"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <div class="section-title">Shipping Address</div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Address</span>
                                <input type="text" name="address" class="form-control"
                                    placeholder="Street, House #, Area" required>
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
                                <input type="text" name="state" class="form-control" placeholder="e.g., Punjab"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Postal Code</span>
                                <input type="text" name="zip" class="form-control" placeholder="e.g., 54000"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Payment-meth</span>
                                <input type="text" name='payment_method' class="form-control" value="Cash on Delivery"
                                    readonly>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4 mb-5 px-5">
                            <a href="{{ route('home') }}" class="btn btn-outline-danger ">Cancel</a>
                            <button type="submit" class="btn btn-outline-primary ">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
