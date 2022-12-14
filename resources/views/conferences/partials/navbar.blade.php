<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3" >
    @auth
        <a class="navbar-brand" href="{{ route('conferences.index') }}">{{__('app.conferences_module.welcome', ['name' => auth()->user()->username])}}</a>
    @else
        <a class="navbar-brand" href="{{ route('conferences.index') }}">{{__('app.conferences_module.welcomeguest')}}</a>
    @endauth

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav">

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">{{__('app.login_module.login')}}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" id="logout-link" href="{{route('logout')}}" >{{__('app.login_module.logout')}}</a>
                </li>
               <form id="logout-form" action="{{route('logout')}}" method="post">
                    @csrf

                </form>
            @endguest

            <li class="nav-item">
                @if(session()->get('locale') === 'en')
                    <a class="nav-link" href="{{ route('lang.change', ['lang' => 'lt']) }}">LT</a>
                @else
                    <a class="nav-link" href="{{ route('lang.change', ['lang' => 'en']) }}">EN</a>
                @endif
            </li>

        </ul>
    </div>
</nav>
