@extends('layout')
@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1>New Article</h1>
		<form method="POST" action="/articles/createArticle">
			@csrf
			<div class="field">
				<label class="label" for="title">Title</label>
				<div class="control">
					<input type="text" class="text @error('title') is-danger @enderror" name="title" id="title" value="{{ old('title') }}">
					@if ($errors->has('title'))
					<p class="help is-danger">{{ $errors->first('title') }}</p>
				@endif
					
				</div>
			
			</div>
			<div class="field">
				<label class="label" for="excerpt">Excerpt</label>
				<div class="control">
					<textarea class="textarea @error('excerpt') is-danger @enderror"  name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
					@if ($errors->has('excerpt'))
					<p class="help is-danger">{{ $errors->first('excerpt') }}</p>
				@endif
				</div>
			
			</div>
			<div class="field">
				<label class="label" for="excerpt">Body</label>
				<div class="control">
					<textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ old('body') }}</textarea>
					@if ($errors->has('body'))
					<p class="help is-danger">{{ $errors->first('body') }}</p>
				@endif
				</div>
			
			</div>
			<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-link is-light">Cancel</button>
  </div>
</div>
		</form>
	</div>
</div>
@endsection