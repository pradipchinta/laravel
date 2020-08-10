

    <p>user name </p>

    <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $customer->name }}">

    <p style="color: red;">@error('name'){{ $message }} @enderror</p>

    <p>email address </p>

    <input type="text" name="email" autocomplete="off" value="{{ old('email') ?? $customer->email }}"><br><br>

    <p style="color: red;">@error('email'){{ $message }} @enderror</p>

@csrf
