<!-- views/account/options.blade.php -->

@extends
('http://layouts.app')

@section
('content')

<h1>Account Options</h1>

<p>Here are your account options:</p>

<ul>
    <li><a href="{{ route('account.balance') }}">View Balance</a></li>
    <li><a href="{{ route('account.transactions') }}">View Transactions</a></li>
    <li><a href="{{ route('account.withdrawal') }}">Withdraw Money</a></li>
</ul>

@endsection