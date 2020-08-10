<h1>hello world</h1>

<a href="/customers/create">add customer</a>

@foreach ($customer as $item)
<a href="/customers/{{ $item->id }}"><h4>{{ $item->name }}</p></a><h4>({{ $item->email }})
@endforeach
