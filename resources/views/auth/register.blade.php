<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('APP_NAME','Banking App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container mt-5 mx-auto">
    <div class="mt-5">
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <h2 class="text-center mb-4">ABC BANK</h2>
    <div class="card" style="width: 500px; margin: 0 auto;">
        <div class="card-body">
            <h5 class="card-title mb-4">Create new account</h5>
            <form action="{{ route('register.store') }}" method="POST" class="ms-auto me-auto mt-auto">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> Agree to the <a class="text-primary">terms and policy</a></label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">Create new account</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mt-3">
        <p class="text-muted">Already have an account? <a href="{{route('login.index')}}" class="text-primary">Sign in</a></p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
