@extends("layouts.app")
@section("content")
    <h3>{{__('app.home_module.index_title')}}</h3>

    <h2>{{trans_choice('app.home_module.apples', 10)}}</h2>
@endsection
