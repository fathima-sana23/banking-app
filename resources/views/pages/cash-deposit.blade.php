@extends('layouts.app')
@section('title', 'Cash Deposit')
@section('content')
    <div class="container mt-5 mx-auto">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card" style="width: 500px; margin: 0 auto;">
            <div class="card-body">
                <h3 class="text-left mb-4">Deposit Money</h3>
                <form action="{{ route('cash-deposit.store') }}" method="POST" class="ms-auto me-auto mt-auto">
                    @csrf
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="Enter amount to deposit">
                        @error('amount')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="submit">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
