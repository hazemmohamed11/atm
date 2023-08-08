
<h1>Account Options</h1>
   <p>User: {{ $user->name }}</p>
   <p>Account Number: {{ $account->account_number }}</p>
   <p>Balance: {{ $account->balance }}</p>

   <ul>
       <li><a href="{{ url('/account/balance/' . $account->id) }}">View Balance</a></li>
       <li><a href="{{ url('/account/withdrawal/' . $account->id) }}">Withdraw Money</a></li>
   </ul>