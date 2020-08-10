@extends('index')

@section('title','nav bar')
@section('color','red')

@section('content')
<form action="/index" method="POST">
    <input type="text" name="name" autocomplete="off">
    <button>search</button>
@csrf
</form>



@error('name')
{{ $message }}
@enderror
@foreach ($services as $item)
<h1>{{ $item->name}}</h1>
@endforeach


{{--
@foreach ($services as $service)
    <h1>{{ $service->name }}</h1>
@endforeach
 --}}

@endsection
