@extends("layouts.app")
@section("content")
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif

    <h2>{{trans_choice('app.conferences_module.conferencesCount', count($conferences))}}</h2>
    @auth
        <a href="{{ route('conferences.create') }}"><button type="button">Create</button></a>
    @endauth
    @each('conferences.partials.list', $conferences, 'conference')
@endsection
