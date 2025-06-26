@extends('layouts.dashboard')

@push('style')
    <style>
        .card {
            background-color: rgb(204, 205, 214);
            color: rgb(19, 17, 17);
            font-weight: bold;
            font-size: 18px;
        }

        .btn {
            font-size: 16px;
            padding: 10px 20px;
        }
    </style>
@endpush

@section('content')
    <div class="card-body">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-6">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}

    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('checkouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                     {{-- <div class="col-12 mb-4">
                        <label for="order_id" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Customer Name"
                            value="{{ old('name') }}">
                    </div> --}}
                    <div class="col-12 mb-4">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Customer Name"
                            value="{{ old('name') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="phone_num" class="col-form-label">Phone_Num</label>
                        <input type="phone_num" name="phone_num" id="phone_num" class="form-control"
                            value="{{ old('phone_num') }}">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="address" class="col-form-label">Address</label>
                        <input type="address" name="address" id="address" class="form-control"
                            value="{{ old('email') }}">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="payment_method" class="col-form-label">Payment Method</label>
                        <select name="payment_method" id="payment_method" class="form-select" required>
                            <option value="">Select</option>
                            <option
                                value="Pay-on delivery"{{ old('payment_method') == 'Pay-on delivery' ? 'selected' : '' }}>
                                Pay-on delivery</option>
                            <option value="Jazzcash" {{ old('payment_method') == 'Jazzcash' ? 'selected' : '' }}>Jazzcash
                            </option>
                            <option value="Bank Account" {{ old('payment_method') == 'Bank Account' ? 'selected' : '' }}>
                                Bank Account</option>

                        </select>
                    </div>


                    <div class="col-12 mb-4">
                        <label for="city" class="form-label">City</label>
                        <div class="input-group">

                            <select name="city" id="city" class="form-select" required>
                                <option value="">Select</option>
                                <option value="karachi" {{ old('city') == 'karachi' ? 'selected' : '' }}>Karachi</option>
                                <option value="lahore" {{ old('city') == 'lahore' ? 'selected' : '' }}>Lahore</option>
                                <option value="islamabad" {{ old('city') == 'islamabad' ? 'selected' : '' }}>Islamabad
                                </option>
                                <option value="rawalpindi" {{ old('city') == 'rawalpindi' ? 'selected' : '' }}>Rawalpindi
                                </option>
                                <option value="faisalabad" {{ old('city') == 'faisalabad' ? 'selected' : '' }}>Faisalabad
                                </option>
                                <option value="multan" {{ old('city') == 'multan' ? 'selected' : '' }}>Multan</option>
                                <option value="quetta" {{ old('city') == 'quetta' ? 'selected' : '' }}>Quetta</option>
                                <option value="peshawar" {{ old('city') == 'peshawar' ? 'selected' : '' }}>Peshawar
                                </option>
                                <option value="gujranwala" {{ old('city') == 'gujranwala' ? 'selected' : '' }}>Gujranwala
                                </option>
                                <option value="sialkot" {{ old('city') == 'sialkot' ? 'selected' : '' }}>Sialkot</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-12 mb-4">
                        <label for="state" class="col-form-label">State</label>
                        <input type="state" name="state" id="state" class="form-control">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="zip" class="col-form-label">Postal / Zip</label>
                        <input type="zip" name="zip" id="zip" class="form-control">
                    </div>

                    <div class="col-12 text-end mb-4">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
    {{-- content --}}
@endsection
