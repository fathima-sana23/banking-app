<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index()
    {
        Auth::logout();

        return redirect(route('login.index'))->with("success", "You have been logged out successfully.");
    }
}
