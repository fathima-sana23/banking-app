<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\Support\Facades\Auth;

class StatementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $statements = Statement::where('user_id', $user->id)->paginate(10);

        return view('pages.statements.index', compact('statements'));
    }
}
