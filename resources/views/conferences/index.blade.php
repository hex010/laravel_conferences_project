@extends("layouts.app")
@section("content")

    {{-- notification, when conference updated/deleted --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show m-2">
            {{-- class from icons package (npm i bootstrap-icons) --}}
            <i class="bi-check-circle-fill"></i>

            <strong class="mx-2">Success!</strong> {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="container pt-3 my-3 border text-center">
        <p class="conference_count">
            {{trans_choice('app.conferences_module.conferencesCount', count($conferences))}}
        </p>

        @auth
            <a href="{{ route('conferences.create') }}"><button type="button" class="btn btn-dark mb-3">{{__('app.conferences_module.create')}}</button></a>
        @endauth
    </div>

    @each('conferences.partials.list', $conferences, 'conference')
@endsection
