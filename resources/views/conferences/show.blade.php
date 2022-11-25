@extends('layouts.app')

@section('content')
    <h2>{{$conference['title']}}</h2>
    <p>{{$conference['content']}}</p>

    <div>
    <a href="{{ route('conferences.index') }}"><button type="button">Back to the list</button></a>
    </div>
@endsection
