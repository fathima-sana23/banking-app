<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            return redirect()->route('home.index');
        }
        return view('auth.login');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->intended(route('home.index'))->with("success", "Login successful. Welcome back, $user->name!");
        }

        return redirect(route('login.index'))->with("error", "Login details are not valid");
    }
}
