<!doctype html>
<html lang="en" style="height: 100%; ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: linear-gradient(to top, #80FFDB, #5390D9); height: 100%; background-attachment:fixed;">
    <header>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

        @include('conferences.partials.navbar')
    </header>

    @yield('content')
</body>
</html>
