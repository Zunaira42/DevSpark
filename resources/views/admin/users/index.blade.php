@extends('layouts.dashboard')
@section('content')
    <div class="card-body">
        <div class="container-fluid">
            <div class="row mb-3 ">
                <div class="col-6">
                    <h2>Users</h2>
                </div>
                <div class="col-6 text-end">
                    {{-- <a href="{{ route('users.create') }}" class="btn btn-danger">Create</a> --}}
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <table class="table table-striped">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>e-mail</th>
                                            <th>role</th>
                                             <th>View </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->is_admin)
                                                        <span class="badge bg-success">Yes</span>
                                                    @else
                                                        <span class="badge bg-secondary">No</span>
                                                    @endif
                                                </td>
                                                <td> <a href="{{ route('users.edit', $user->id) }}">
                                                        <i class="bi bi-eye-fill"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
