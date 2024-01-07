<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/home', 'App\Http\Controllers\User\HomeController')->middleware('auth')->only(['index', 'store']);


Route::resource('/login', 'App\Http\Controllers\Auth\LoginController')->only(['index', 'store']);
Route::resource('/register', 'App\Http\Controllers\User\RegisterController')->only(['index', 'store']);
Route::resource('/logout', 'App\Http\Controllers\Auth\LogoutController')->only(['index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('/cash-deposit', 'App\Http\Controllers\User\CashDepositController')->only(['index', 'store']);
    Route::resource('/cash-withdrawal', 'App\Http\Controllers\User\CashWithdrawalController')->only(['index','store']);
    Route::resource('/cash-transfer', 'App\Http\Controllers\User\CashTransferController')->only(['index','store']);
    Route::resource('/statements', 'App\Http\Controllers\User\StatementController')->only('index');

});


