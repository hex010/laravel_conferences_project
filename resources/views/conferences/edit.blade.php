@extends('layouts.app')

@section('title', 'Conference Edit Form')
@section('content')
    <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="post">
        @csrf
        @method('PUT')
        @include('conferences.partials.form')
        <div><input type="submit" value="{{__('app.conferences_module.update')}}"></div>
    </form>
@endsection
