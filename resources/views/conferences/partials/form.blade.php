<label class="font-500">{{__('app.conferences_module.title')}}</label>
<input name="title" id="title-input" class="form-control form-control-lg mb-3" value="{{old('title', optional($conference ?? null)->title)}}">
@error('title')
<p style="color: red">{{$message}}</p>
@enderror

<label class="font-500">{{__('app.conferences_module.content')}}</label>
<textarea id="content-input" class="form-control form-control-lg mb-3" name="content">{{old('content', optional($conference ?? null)->content)}}</textarea>
@error('content')
<p style="color: red">{{$message}}</p>
@enderror

<label class="font-500">{{__('app.conferences_module.date')}}</label>
<input type="date" id="date-input" class="form-control form-control-lg mb-3" name="date" value="{{old('date', optional($conference ?? null)->date)}}">
@error('date')
<p style="color: red">{{$message}}</p>
@enderror

<label class="font-500">{{__('app.conferences_module.address')}}</label>
<input name="address" id="address-input" class="form-control form-control-lg mb-3" value="{{old('address', optional($conference ?? null)->address)}}">
@error('address')
<p style="color: red">{{$message}}</p>
@enderror

<label for="address-input">{{__('app.conferences_module.participants')}}</label>
<input type="number" id="participants-input" class="form-control form-control-lg mb-3" name="participants" min="2" value="{{old('participants', optional($conference ?? null)->participants)}}">
@error('participants')
<p style="color: red">{{$message}}</p>
@enderror
