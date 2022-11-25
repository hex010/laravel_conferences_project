<div>
    <label for="title-input">{{__('app.conferences_module.title')}}</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="content-input">{{__('app.conferences_module.content')}}</label>
    <textarea id="content-input" name="content">{{old('content', optional($conference ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="date-input">{{__('app.conferences_module.date')}}</label>
    <input type="date" id="date-input" name="date" value="{{old('date', optional($conference ?? null)->date)}}">
    @error('date')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">{{__('app.conferences_module.address')}}</label>
    <input type="text" id="address-input" name="address" value="{{old('address', optional($conference ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">{{__('app.conferences_module.participants')}}</label>
    <input type="number" id="participants-input" name="participants" min="2" value="{{old('address', optional($conference ?? null)->participants)}}">
    @error('participants')
    <p>{{$message}}</p>
    @enderror
</div>
