@extends("layouts.app")
@section("content")
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif

    <div class="container pt-3 my-3 border" style="text-align: center">
        <p style="font-family: 'Ubuntu', sans-serif; font-size: 30px; color: #121212; letter-spacing: 5px; text-shadow: 2px 2px 10px #000000;">
            {{trans_choice('app.conferences_module.conferencesCount', count($conferences))}}
        </p>

        @auth
            <a href="{{ route('conferences.create') }}"><button type="button" class="btn btn-dark mb-3">{{__('app.conferences_module.create')}}</button></a>
        @endauth
    </div>

    @include('conferences.partials.modal')
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
