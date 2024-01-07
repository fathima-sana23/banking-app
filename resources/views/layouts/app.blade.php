<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
<div class="container">
    <div class="row mb-0">
        <div class="col">
            <h4 class="display-4">ABC BANK</h4>
            <hr style="opacity: 0.5;">
        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cash-deposit.index') }}"><i class="fas fa-money-bill-wave"></i> Deposit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cash-withdrawal.index') }}"><i class="fas fa-money-bill-wave"></i> Withdraw</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cash-transfer.index') }}"><i class="fas fa-exchange-alt"></i> Transfer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('statements.index') }}"><i class="fas fa-file-alt"></i> Statement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout.index') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="card border-0 bg-transparent mt-3">
    <div class="card-body">
        @yield('content')
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
