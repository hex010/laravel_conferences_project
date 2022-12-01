@extends('layouts.app')

@section('content')
    <div class="conference-container">
        <div class="col-lg-7 mx-auto">
            <div class="p-4 bg-primary text-white rounded shadow-lg">
                <h1 class="text-center pb-3">{{$conference['title']}}</h1>
                <div class="fs-5">
                    <p><span class="conference-list-item">{{__('app.conferences_module.content')}}:</span> <span>{{$conference['content']}}</span></p>
                    <p><span class="conference-list-item">{{__('app.conferences_module.date')}}:</span> <span> {{$conference['date']}}</span></p>
                    <p><span class="conference-list-item">{{__('app.conferences_module.address')}}:</span> <span>{{$conference['address']}}</span></p>
                    <p><span class="conference-list-item">{{__('app.conferences_module.participants')}}:</span> <span>{{$conference['participants']}}</span></p>
                    <a href="{{ route('conferences.index') }}"><button type="button" class="btn btn-dark">{{__('app.conferences_module.backToTheList')}}</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
