<h1>Details of customer info</h1>
<div>
    <a href="/customers"> >back </a>
</div>
<h1>name</h1>

<h4>{{ $customer->name }}</h4>
<H1>email</H1>
<h4>{{ $customer->email }}</h4>

<div>
    <a href="/customers/{{ $customer->id }}/edit">edit</a>

    <form action="/customers/{{ $customer->id }}" method="post">
        @method('DELETE')

        <button>delete</button>
    @csrf
    </form>
</div>


