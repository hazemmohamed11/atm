@foreach ($accounts as $account)
    <p>
        <a href="{{ route('account.options', ['user' => $user->id, 'account' => $account->id]) }}">
            Account Number: {{ $account->account_number }}
        </a>
    </p>
    <p>Balance: {{ $account->balance }}</p>
    <hr>
@endforeach

<h3>Last 5 Transactions:</h3>
    <ul>
        @foreach ($user->transactions()->latest()->take(5)->get() as $transaction)
            <li>
                Transaction : {{ $transaction->id }}<br>
                Amount: {{ $transaction->amount }}<br>
                Type: {{ $transaction->type }}
            </li>
        @endforeach
    </ul>

    <hr>