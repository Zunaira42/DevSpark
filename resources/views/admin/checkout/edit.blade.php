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
                    <h1>Edit Checkout</h1>
                </div>
            </div>
        </div>
    </div>

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

        <form action="{{ route('checkouts.update', $checkout->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $checkout->name) }}" placeholder="Customer Name">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $checkout->email) }}" placeholder="Email">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="phone_num" class="col-form-label">Phone Number</label>
                        <input type="text" name="phone_num" id="phone_num" class="form-control"
                            value="{{ old('phone_num', $checkout->phone_num) }}" placeholder="Phone Number">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="address" class="col-form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control"
                            value="{{ old('address', $checkout->address) }}" placeholder="Address">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="payment_method" class="col-form-label">Payment Method</label>
                        <select name="payment_method" id="payment_method" class="form-select" required>
                            <option value="">Select</option>
                            <option value="Pay-on delivery" {{ old('payment_method', $checkout->payment_method) == 'Pay-on delivery' ? 'selected' : '' }}>Pay-on delivery</option>
                            <option value="Jazzcash" {{ old('payment_method', $checkout->payment_method) == 'Jazzcash' ? 'selected' : '' }}>Jazzcash</option>
                            <option value="Bank Account" {{ old('payment_method', $checkout->payment_method) == 'Bank Account' ? 'selected' : '' }}>Bank Account</option>
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="city" class="col-form-label">City</label>
                        <select name="city" id="city" class="form-select" required>
                            <option value="">Select</option>
                            @foreach (['karachi','lahore','islamabad','rawalpindi','faisalabad','multan','quetta','peshawar','gujranwala','sialkot'] as $city)
                                <option value="{{ $city }}" {{ old('city', $checkout->city) == $city ? 'selected' : '' }}>
                                    {{ ucfirst($city) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="state" class="col-form-label">State</label>
                        <input type="text" name="state" id="state" class="form-control"
                            value="{{ old('state', $checkout->state) }}" placeholder="State">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="zip" class="col-form-label">Postal / Zip</label>
                        <input type="text" name="zip" id="zip" class="form-control"
                            value="{{ old('zip', $checkout->zip) }}" placeholder="Zip Code">
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
