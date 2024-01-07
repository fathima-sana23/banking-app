@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container mt-5">
        @auth
            <div class="card" style="width: 500px; margin: 0 auto;">
                <div class="card-body">
                    <h3>Welcome {{ auth()->user()->name }}</h3>
                    <hr>
                    <p>Your ID: {{ auth()->user()->email }}</p>
                    <hr>
                    <p>Your Balance:{{auth()->user()->balance}}</p>
                </div>
            </div>
        @endauth
    </div>
@endsection
