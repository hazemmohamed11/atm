<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Account;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function hazem()
    {
        echo "hello";
    }

    public function verifyUser(Request $request)
    {
        $pin = $request->input('pin');
        $cardNumber = $request->input('card_number');

        $user = User::where('pin', $pin)->where('card_number', $cardNumber)->first();
        if ($user) {
            return $this->showAccountTypes($user);
        } else
            return redirect('/verify-error');
    }



    public function showAccountTypes($userLogin)
    {
        $user = $userLogin;
        $accounts = $user->account; // Retrieve all accounts related to the user
    
        return view('account.types', compact('accounts', 'user'));

    }


    public function showAccountOptions($userLogin, $account)
    {
        $user = $userLogin;

        $user = User::find($user);
        $account = Account::find($account);
    
        // Perform any necessary actions with the user and account details
    
        return view('account.options', compact('user', 'account'));
    }

    public function cashWithdrawal($account, Request $request)
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
      // Create a transaction record
      $transaction = new Transaction();
      $transaction->user_id = Auth::id();
      $transaction->amount = $amount;
      $transaction->type = 'withdrawal';
      $transaction->save();


        // Return the success message
        return view('account.withdrawal', [
            'success' => 'The withdrawal was successful.',
            'account' => $account
        ]);
    }
}
