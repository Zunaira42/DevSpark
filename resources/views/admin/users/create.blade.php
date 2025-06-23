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
                    <h1>Products</h1>
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
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                            value="{{ old('name') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="is_admin" class="form-label">Is Admin</label>
                        <select name="is_admin" id="is_admin" class="form-select" required>
                            <option value="1" {{ old('is_admin') == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('is_admin') == '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
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
