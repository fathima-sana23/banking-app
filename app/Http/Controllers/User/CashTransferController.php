<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CashTransferController extends Controller
{
    public function index()
    {

        return view('pages.cash-transfer');
    }


    public function store(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'amount' => 'required|numeric|min:0.01',
        ]);
        $sender = Auth::user();
        $receiver = User::where('email', 'LIKE', $request->input('email'))->first();
        if (!$receiver) {

            return redirect()->route('cash-transfer.index')->with("error", "Receiver not found with the provided email");

        }

        if ($sender->balance >= $request->input('amount')) {

            DB::transaction(function () use ($sender, $receiver, $request) {
                $sender->balance -= $request->input('amount');
                $receiver->balance += $request->input('amount');
                $sender->save();
                $receiver->save();
                $sender->statements()->create([
                    'datetime' => now(),
                    'amount' => $request->input('amount'),
                    'transaction_type' => 'Transfer',
                    'details' => 'Transfer to ' . $receiver->email,
                    'balance' => $sender->balance,
                ]);

            });

            return redirect()->route('home.index')->with("success", "Cash transfer successful. Your new balance is $" . $sender->balance);
        }

            return redirect()->route('cash-transfer.index')->with("error", "Insufficient balance for transfer");
    }
}
