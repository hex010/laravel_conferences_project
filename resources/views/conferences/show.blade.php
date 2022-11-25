@extends('layouts.app')

@section('content')
    <h2>Title: {{$conference['title']}}</h2>
    <p>Content: {{$conference['content']}}</p>
    <p>Date: {{$conference['date']}}</p>
    <p>Address: {{$conference['address']}}</p>

    <div>
    <a href="{{ route('conferences.index') }}"><button type="button">Back to the list</button></a>
    </div>
@endsection
