@extends('layouts.app')

@section('title', 'Account Statement')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Account Statement</h2>
        <table class="table" id="statement-table">
            <thead>
            <tr>
                <th>Datetime</th>
                <th>Amount</th>
                <th>Transaction Type</th>
                <th>Details</th>
                <th>Balance</th>
            </tr>
            </thead>
            <tbody>
            @isset($statements)
                @foreach($statements as $statement)
                    <tr>
                        <td>{{ $statement->datetime }}</td>
                        <td>{{ $statement->amount }}</td>
                        <td>{{ $statement->transaction_type }}</td>
                        <td>{{ $statement->details }}</td>
                        <td>{{ $statement->balance }}</td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>

        {{ $statements->links('pagination::bootstrap-4', ['prev_text' => '← Previous', 'next_text' => 'Next →']) }}
    </div>
@endsection
