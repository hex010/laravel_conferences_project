<div>
    <label for="title-input">Title</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">Content</label>
    <textarea id="content-input" name="content">{{old('content', optional($conference ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
