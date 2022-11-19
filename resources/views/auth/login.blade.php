<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('login') }}" method="post">
    @csrf
    <div>
        <label for="username-input">Username</label>
        <input type="text" id="username-input" name="username" value="{{old('username')}}">
        @error('username')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password-input">Password</label>
        <input type="password" id="password-input" name="password" value="{{old('password')}}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="remember-input">Remember me</label>
        <input type="checkbox" id="remember-input" name="remember" value="1">
    </div>
    <input type="submit" value="Login">
</form>
</body>
</html>
