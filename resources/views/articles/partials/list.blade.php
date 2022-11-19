<div>
    <h1>{{$article['title']}}</h1>
    <p>{{$article['content']}}</p>
    @auth
    <a href="{{ route('articles.edit', ['article' => $article['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
    </form>
    @endauth
    <br>
</div>
