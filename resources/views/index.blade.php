<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','index')

    </title>
</head>
<body bgcolor=@yield('color','pink')>
    <h1>hello world</h1>




    <ul>
        <li><a href="/about">service navbar</a>    </li>
        <li><a href="/footer">service footer</a>     </li>
    </ul>

    @yield('content')

</body>
</html>
