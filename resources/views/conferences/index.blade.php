@extends("layouts.app")
@section("content")
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif

    <div class="container p-3 my-3 border" style="text-align: center">
        <h2>{{trans_choice('app.conferences_module.conferencesCount', count($conferences))}}</h2>
        @auth
            <a href="{{ route('conferences.create') }}"><button type="button">{{__('app.conferences_module.create')}}</button></a>
        @endauth
    </div>

    @include('conferences.partials.modal')
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
