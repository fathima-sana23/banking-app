@extends('layouts.app')
@section('title', 'Cash Transfer')
@section('content')
    <div class="container mt-5 mx-auto">
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="card" style="width: 500px; margin: 0 auto;">
            <div class="card-body">
                <h3 class="text-left mb-4">Transfer Money</h3>
                <form action="{{ route('cash-transfer.store') }}" method="POST" class="ms-auto me-auto mt-auto">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="Enter amount to transfer">
                        @error('amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
