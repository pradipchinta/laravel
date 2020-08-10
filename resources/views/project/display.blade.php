<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/dis" method="post">
        <input type="text" name="name" autocomplete="off">
        <button>add_value</button>

        @csrf
    </form>
    @error('name')
   <h3 style="color: red;">{{ $message }}</h3>

    @enderror

@foreach ($data as $item)
        {{ $item->name }}  <br>
    @endforeach
</body>
</html>
