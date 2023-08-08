<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Transaction;


class AccountController extends Controller
{
   
    public function balanceInquiry($id)
    {
        $account = Account::find($id);
        // Retrieve the account balance
        $balance = $account->balance;
        // Return the view with the account balance
        return view('account.balance', compact('balance'));
    }


    public function cashWithdrawal($account,Request $request)
    {
        $account = Account::find($account);
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

        $transaction = new Transaction();
        $transaction->user_id = $account->user_id; // Assuming the user_id is stored in the account model
        $transaction->amount = $amount;
        $transaction->type = 'withdrawal'; // Tbh it's not shown in mail so i left it withdrawal as a type,it not affect anything
        $transaction->save();

$transaction->save();

        return view('account.withdrawal', [
            'success' => 'The withdrawal was successful.',
            'account' => $account
        ]);
    }
}
