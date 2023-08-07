<!-- views/account/withdrawal.blade.php -->

@extends
('http://layouts.app')

@section
('content')

@if
 ($error)
<div class="alert alert-danger">
    {{ $error }}
</div>
@endif


<h1>Withdraw Money</h1>

<form action="{{ route('account.withdrawal') }}" method="post">
    
@csrf


    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Withdraw</button>
</form>

@endsection