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
                    <h1>Edit Users</h1>
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
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="name" class="col-form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Enter Product Name" value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="col-12 mb-4">
                        <label for="is_admin" class="col-form-label">Role</label>
                        <select name="is_admin" id="is_admin" class="form-select" required>
                            <option value="1" {{ old('is_admin', $user->is_admin) == '1' ? 'selected' : '' }}>Yes
                            </option>
                            <option value="0" {{ old('is_admin', $user->is_admin) == '0' ? 'selected' : '' }}>No
                            </option>
                        </select>
                    </div>

                    <div class="col-12 mb-4">
                        <label for="password" class="col-form-label">Password</label>
                        <textarea name="password" id="password" class="form-control">{{ old('password', $user->password) }}</textarea>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 text-end mt-3">
        <button type="submit" class="btn btn-danger">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
    </div>
    </form>

    {{-- content --}}
@endsection
