<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<form action="/verify" method="post" @submit="verifyUser">
    <input type="text" name="pin" placeholder="PIN" pattern="^\d{6}$" class="form-control">
    <input type="text" name="card_number" placeholder="Credit card number" pattern="^\d{14}$" class="form-control">
    <input type="submit" value="Verify" class="btn btn-primary">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@if (auth()->check() && auth()->user()->isVerified() && !request()->is('verify'))
    <script>
        window.location.href = "{{ route('user.account_options') }}"
    </script>
@endif
