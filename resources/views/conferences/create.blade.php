@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <form action="{{ route('conferences.store') }}" method="post">
        @csrf
        @include('conferences.partials.form')
        <div><input type="submit" value="{{__('app.conferences_module.create')}}"></div>
    </form>
@endsection
