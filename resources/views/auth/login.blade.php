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
    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <h2 class="text-center mb-4">ABC BANK</h2>
    <div class="card" style="width: 500px; margin: 0 auto;">
        <div class="card-body">
            <h5 class="card-title mb-4">Login to your account</h5>
            <form action="{{route('login.store')}}" method="POST" class="ms-auto me-auto mt-auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mt-3">
        <p class="text-muted">Don't have an account yet? <a href="{{route('register.index')}}" class="text-primary">Sign up</a></p>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
