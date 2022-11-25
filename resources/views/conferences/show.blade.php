@extends('layouts.app')

@section('content')
    <h2>{{__('app.conferences_module.title')}}: {{$conference['title']}}</h2>
    <p>{{__('app.conferences_module.content')}}: {{$conference['content']}}</p>
    <p>{{__('app.conferences_module.date')}}: {{$conference['date']}}</p>
    <p>{{__('app.conferences_module.address')}}: {{$conference['address']}}</p>
    <p>{{__('app.conferences_module.participants')}}: {{$conference['participants']}}</p>

    <div>
    <a href="{{ route('conferences.index') }}"><button type="button">{{__('app.conferences_module.backToTheList')}}</button></a>
    </div>
@endsection
