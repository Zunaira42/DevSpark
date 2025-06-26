@extends('app.layouts.app')
@push('styles')
    <style>
        body {
            /* background-color:rgb(244, 229, 201) */
            background-color: rgb(225, 225, 225)
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
    <div id="checkout" class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Check-out</p>
                </div>
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

                            <div class="col-12  mt-3 mb-5 mx-3 ">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
