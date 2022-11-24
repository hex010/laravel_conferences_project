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
    <header>
        @guest
            <a href="{{route('login')}}">Login</a>
        @else
            <a class="logout" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none;">
                @csrf

            </form>
        @endguest

        @if(session()->get('locale') === 'en')
            <a href="{{ route('lang.change', ['lang' => 'lt']) }}">LT</a>
        @else
            <a href="{{ route('lang.change', ['lang' => 'en']) }}">EN</a>
        @endif

        @auth
            <h3>{{__('app.home_module.welcome', ['name' => auth()->user()->username])}}</h3>
            <br>
        @endauth

    </header>
@yield('content')
</body>
</html>
