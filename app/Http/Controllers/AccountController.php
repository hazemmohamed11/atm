<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function balanceInquiry(Account $account)
    {
        // Retrieve the account balance
        $balance = $account->balance;

        // Return the view with the account balance
        return view('account.balance', compact('balance'));
    }

    public function cashWithdrawal(Account $account, Request $request)
    {
        // Retrieve the account details and perform the cash withdrawal
        $amount = $request->input('amount');

        // Check if the amount is valid
        if ($amount > $account->balance) {
            return view('account.withdrawal', [
                'error' => 'The amount must not be greater than the account balance.',
            ]);

        }
        // Withdraw the amount
        $account->balance -= $amount;
        $account->save();

        // Create a transaction
        $transaction = new Transaction();
        $transaction->account_id = $account->id;
        $transaction->amount = $amount;
        $transaction->save();

        // Return the success message
        return view('account.withdrawal', [
            'success' => 'The withdrawal was successful.',
        ]);
    }
}