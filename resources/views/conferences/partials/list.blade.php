<div class="container p-3 my-4 bg-primary text-white border border-dark border-2 rounded shadow">
    @auth
        <h1 class="text-center pb-3">{{$conference['title']}}</h1>
        <p><span style="font-weight: bold">{{__('app.conferences_module.content')}}:</span> <span>{{$conference['content']}}</span></p>
        <p><span style="font-weight: bold">{{__('app.conferences_module.date')}}:</span> <span> {{$conference['date']}}</span></p>
        <p><span style="font-weight: bold">{{__('app.conferences_module.address')}}:</span> <span>{{$conference['address']}}</span></p>
        <p><span style="font-weight: bold">{{__('app.conferences_module.participants')}}:</span> <span>{{$conference['participants']}}</span></p>
        <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button" class="mb-2 btn btn-dark">{{__('app.conferences_module.edit')}}</button></a>
        <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="{{__('app.conferences_module.delete')}}" class="btn btn-dark" data-toggle="modal" data-target="#deleteConferenceModal">
        </form>
    @else
        <h1 >{{$conference['title']}}</h1>
        <a href="{{ route('conferences.show', ['conference' => $conference['id']]) }}"><button type="button" class="btn btn-dark">{{__('app.conferences_module.view')}}</button></a>
    @endauth
</div>
