@extends('layouts.app')

@section('title', 'Conference Edit Form')
@section('content')
    <div class="conference-container">
        <div class="col-lg-6 col-10 mx-auto">
            <div class="p-4 bg-white rounded shadow-lg">
                <form action="{{ route('conferences.update', ['conference' => $conference->id]) }}" method="post">
                    <h3 class="mb-2 text-center">{{__('app.conferences_module.confEditing')}}</h3>
                    @csrf
                    @method('PUT')
                    @include('conferences.partials.form')
                    <button class="btn btn-primary btn-lg w-100 shadow-lg">{{__('app.conferences_module.update')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
