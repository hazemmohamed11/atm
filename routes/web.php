<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;


Route::get('/verify', function () {
    // Render the verification view
    return view('verify');
});

Route::get('/hazem', [App\Http\Controllers\UserController::class,'hazem']);

Route::post('/verify', [App\Http\Controllers\UserController::class,'verifyUser']);

// Route::post('/verify', 'UserController@verifyUser');
Route::get('/verify-error', [App\Http\Controllers\UserController::class,'verify-error']);

// Route::get('/verify-error','UserController@verifyError');

Route::get('/account/options', [App\Http\Controllers\UserController::class, 'showAccountOptions'])->name('account.options');
// Route::get('/account/options','UserController@showAccountOptions')->name('account.options');
Route::get('/account/transactions', [App\Http\Controllers\UserController::class,'showTransactions']);

// Route::get('/account/transactions', 'UserController@showTransactions')->name('account.transactions');

Route::get('/account/balance', [App\Http\Controllers\AccountController::class,'balanceInquiry']);

// Route::get('/account/balance', 'AccountController@balanceInquiry')->name('account.balance');
Route::post('/account/withdrawal', [App\Http\Controllers\AccountController::class,'cashWithdrawal']);

// Route::post('/account/withdrawal', 'AccountController@cashWithdrawal')->name('account.withdrawal');