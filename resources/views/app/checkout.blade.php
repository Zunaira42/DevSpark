@extends('app.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Checkout') }}</div>
                    <div class="card-body">
                        <h4>Welcome {{ auth()->user()->name }}!</h4>
                        <p>Complete your purchase here.</p>

                        <!-- Your checkout form here -->
                        {{-- <form method="POST" action="{{ route('process.checkout') }}"> --}}
                        @csrf
                        <!-- Checkout fields -->
                        <button type="submit" class="btn btn-success">
                            Complete Purchase
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
