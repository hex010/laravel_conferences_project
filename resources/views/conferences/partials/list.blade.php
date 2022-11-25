<div>
    <h1>Title: {{$conference['title']}}</h1>
    <p>Content: {{$conference['content']}}</p>
    <p>Date: {{$conference['date']}}</p>
    <p>Address: {{$conference['address']}}</p>


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
