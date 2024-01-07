<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashWithdrawalController extends Controller
{
    public function index()
    {

        return view('pages.cash-withdrawal');
    }


    public function store(Request $request)
    {
        $request->validate([

            'amount' => 'required|numeric|min:1',
        ]);
        $user = Auth::user();
        if ($user->balance >= $request->input('amount')) {

            $user->balance -= $request->input('amount');
            $user->save();
            Statement::create([
                'user_id' => $user->id,
                'datetime' => now(),
                'amount' => $request->input('amount'),
                'transaction_type' => 'Withdrawal',
                'details' => ' Withdraw',
                'balance' => $user->balance,
            ]);

            return redirect()->route('home.index')->with("success", "Cash withdrawal successful. Your new balance is $" . $user->balance);
        }

            return redirect()->route('cash-withdrawal.index')->with("error", "Insufficient balance for withdrawal");

    }
}
