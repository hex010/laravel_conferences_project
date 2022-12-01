<!doctype html>
<html lang="en" class="login-page-html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="login-page-body">
    <div class="login-container">
    <div class="col-lg-5 col-10 mx-auto">
        <div class="p-5 bg-white rounded shadow-lg">
            <h3 class="mb-2 text-center">{{__('app.login_module.signIn')}}</h3>
            <p class="text-center lead">{{__('app.login_module.signInText')}}</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <label class="font-500">{{__('app.login_module.username')}}</label>
                <input name="username" class="form-control form-control-lg mb-3" value="{{old('username')}}">
                @error('username')
                <p class="error-message">{{$message}}</p>
                @enderror

                <label class="font-500">{{__('app.login_module.password')}}</label>
                <input name="password" class="form-control form-control-lg" type="password" value="{{old('password')}}">
                @error('password')
                <p class="error-message">{{$message}}</p>
                @enderror

                <p class="m-0 py-4"><label class="custom-control-label" for="customControlAutosizing">{{__('app.login_module.rememberMe')}}</label>
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing" checked></p>
                <button class="btn btn-primary btn-lg w-100 shadow-lg">{{__('app.login_module.login')}}</button>
            </form>
        </div>
    </div>
    </div>
</body>
</html>
