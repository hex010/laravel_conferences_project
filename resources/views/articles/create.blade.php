@extends('layouts.app')

@section('title', 'Article Creation Form')

@section('content')
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        @include('articles.partials.form')
        <div><input type="submit" value="Create"></div>
    </form>
@endsection
