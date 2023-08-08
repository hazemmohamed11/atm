<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Models\Account;
use Illuminate\Http\Request;

Route::get('/verify', function () {
    // Render the verification view
    return view('verify');
});

Route::get('/hazem', [UserController::class, 'hazem']);

Route::post('/verify', [App\Http\Controllers\UserController::class, 'verifyUser']);

// Route::post('/verify', 'UserController@verifyUser');
Route::get('/verify-error', [App\Http\Controllers\UserController::class, 'verifyError']);

// Route::get('/verify-error','UserController@verifyError');

Route::get('/account-options/{user}/{account}', [App\Http\Controllers\UserController::class, 'showAccountOptions'])->name('account.options');
// Route::get('/account/options','UserController@showAccountOptions')->name('account.options');
Route::get('/account/transactions/{id}', [UserController::class, 'showTransactions']);

// Route::get('/account/transactions', 'UserController@showTransactions')->name('account.transactions');

Route::get('/account/balance/{id}', [App\Http\Controllers\AccountController::class, 'balanceInquiry']);

Route::get('/account/withdrawal/{account}', function($account){
    return view('account.withdrawal',compact('account'));
});
Route::post('/account/withdrawal/{account}', [App\Http\Controllers\AccountController::class, 'cashWithdrawal']);

// Route::post('/account/withdrawal', 'AccountController@cashWithdrawal')->name('account.withdrawal');

Route::get('/account/types', [App\Http\Controllers\UserController::class, 'showAccountTypes']);
