@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif

    <h2>List of Articles</h2>
    @auth
        <a href="{{ route('articles.create') }}"><button type="button">Create</button></a>
    @endauth
    @each('articles.partials.list', $articles, 'article')
@endsection
