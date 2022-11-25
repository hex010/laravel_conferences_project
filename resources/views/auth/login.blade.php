<!doctype html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-image: linear-gradient(to top, #7028e4 0%, #e5b2ca 100%); font-family: 'Roboto', sans-serif; height: 100%;">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <div class="login-containger" style="height: 100%; display: flex; justify-content: center; align-items: center;">
    <div class="col-lg-5 col-10 mx-auto">
        <div class="p-5 bg-white rounded shadow-lg">
            <h3 class="mb-2 text-center">{{__('app.login_module.signIn')}}</h3>
            <p class="text-center lead">{{__('app.login_module.signInText')}}</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <label class="font-500">{{__('app.login_module.username')}}</label>
                <input name="username" class="form-control form-control-lg mb-3" value="{{old('username')}}">
                @error('username')
                <p>{{$message}}</p>
                @enderror

                <label class="font-500">{{__('app.login_module.password')}}</label>
                <input name="password" class="form-control form-control-lg" type="password" value="{{old('password')}}">
                @error('password')
                <p>{{$message}}</p>
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
