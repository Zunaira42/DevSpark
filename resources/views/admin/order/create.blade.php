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
                    <h1>Orders</h1>
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
        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter Product Name" value="{{ old('name') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="price" class="col-form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" step="0.01"
                            min="0" value="{{ old('price') }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="stock" class="col-form-label">Stock</label>
                        <select name="stock" id="stock" class="form-select" required>
                            <option value="1" {{ old('stock') == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('stock') == '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="image" class="col-form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
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
