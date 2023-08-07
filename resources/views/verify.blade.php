
<form action="/verify" method="post" @submit="verifyUser">
    <input type="text" name="pin" placeholder="PIN">
    <input type="text" name="card_number" placeholder="Credit card number">
    <input type="submit" value="Verify">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

@if (auth()->check() && auth()->user()->isVerified() && !request()->is('verify'))
    <script>
        window.location.href = "{{ route('user.account_options') }}"
    </script>
@endif