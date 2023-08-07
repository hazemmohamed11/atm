<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{

public function hazem(){
echo"hello";
}

public function verifyUser(Request $request)
{
// Retrieve PIN and credit card number from the request
$pin = $request->input('pin');
$cardNumber = $request->input('card_number');
// Verify the user by checking the PIN and credit card number
$user = User::where('pin', $pin)
->where('card_number', $cardNumber)
->first();
if ($user) {
// User is verified
// Regenerate the CSRF token
$request->session()->regenerateToken();
// Redirect to the account options page
return redirect()->route('account.options')->with('user', $user);
} else {

// User is not verified
return redirect()->route('verify-error');
}
}
 public function showAccountOptions(Request $request)
    {
        $user = $request->user();

        if ($user && $user->isVerified()) {
            // The user is authenticated and verified
            $accounts = $user->accounts;

            return view('account.options', compact('accounts'));
        } else {

            // The user is not authenticated or verified
            return redirect()->route('verify');
        }
    }


public function showTransactions()
{
// Retrieve the authenticated user
$user = auth()->user();
// Retrieve the user's accounts

$accounts = $user->accounts;
// Retrieve the transactions for the authenticated user
$transactions = $accounts->flatMap(function ($account) {
    return $account->transactions;
});
// Return the view with the transactions
return view('account.transactions', compact('transactions'));
}
}