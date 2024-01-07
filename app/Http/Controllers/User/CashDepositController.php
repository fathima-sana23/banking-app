<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashDepositController extends Controller
{
    public function index()
    {
        return view('pages.cash-deposit');
    }


    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);
        $user = Auth::user();
        $user->balance += $request->input('amount');
        $user->save();

        Statement::create([
            'user_id' => $user->id,
            'datetime' => now(),
            'amount' => $request->input('amount'),
            'transaction_type' => 'Deposit',
            'details' => ' Deposit',
            'balance' => $user->balance,
        ]);

        return redirect()->route('home.index')->with("success", "Cash deposited successfully. Your new balance is $" . $user->balance);
    }
}
