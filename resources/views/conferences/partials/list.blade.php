<div class="container p-3 my-3 bg-primary text-white">
    <h1>{{$conference['title']}}</h1>
    @auth
        <p>{{__('app.conferences_module.content')}}: {{$conference['content']}}</p>
        <p>{{__('app.conferences_module.date')}}: {{$conference['date']}}</p>
        <p>{{__('app.conferences_module.address')}}: {{$conference['address']}}</p>
        <p>{{__('app.conferences_module.participants')}}: {{$conference['participants']}}</p>
        <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button" class="mb-2 btn btn-dark">{{__('app.conferences_module.edit')}}</button></a>
        <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="{{__('app.conferences_module.delete')}}" class="btn btn-dark" data-toggle="modal" data-target="#deleteConferenceModal">
        </form>
    @else
        <a href="{{ route('conferences.show', ['conference' => $conference['id']]) }}"><button type="button" class="btn btn-dark">{{__('app.conferences_module.view')}}</button></a>
    @endauth
</div>
