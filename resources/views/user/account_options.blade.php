
@section('content')
    <h1>This is the content</h1>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection


<h1 class="display-4">Account Options</h1>
   <ul class="list-group">
       <li class="list-group-item"><a href="{{ route('account.balance', $account) }}" class="btn btn-primary">Check Account Balance</a></li>
       <li class="list-group-item"><a href="{{ route('account.withdraw', $account) }}" class="btn btn-primary">Withdraw Cash</a></li>
   </ul>
   <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
