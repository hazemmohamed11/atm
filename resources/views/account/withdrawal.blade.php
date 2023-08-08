

<h1>Withdraw Money</h1>

<form action="{{ url("/account/withdrawal/$account") }}" method="post">

    @csrf

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control" min="0" max="1000">
    </div>

    <button type="submit" class="btn btn-primary">Withdraw</button>
</form>

@isset($error)
<div class="alert alert-danger">
    {{ $error }}
</div>
@endisset


{{-- @endsection --}}
<a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
