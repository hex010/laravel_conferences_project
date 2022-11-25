<div>
    <h1>{{$conference['title']}}</h1>
    <p>{{$conference['content']}}</p>
    @auth
    <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
    </form>
    @endauth
    <br>
</div>
