<h1>edit customer details :</h1>
<form action="/customers/{{ $customer->id }}" method="post">

    @method('patch')


@include('customer.form');

<button>save User</button>

</form>

