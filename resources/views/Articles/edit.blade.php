@extends('layout')
@section('content')

<div id="wrapper">
  <div id="page" class="container">
    <h1>New Article</h1>
      @foreach ($articles as $article)

    <form method="POST" action="/articles/{{ $article->id }}/update">
@endforeach
      @csrf
       @foreach ($articles as $article)
      <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
          <input type="text" class="text @error('title') is-danger @enderror" name="title" id="title" value="{{ $article->title }}">
          @if ($errors->has('title'))
          <p class="help is-danger">{{ $errors->first('title') }}</p>
        @endif
          
        </div>
      
      </div>
      <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <div class="control">
          <textarea class="textarea @error('excerpt') is-danger @enderror"  name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
          @if ($errors->has('excerpt'))
          <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
        @endif
        </div>
      
      </div>
      <div class="field">
        <label class="label" for="excerpt">Body</label>
        <div class="control">
          <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ $article->body }}</textarea>
          @if ($errors->has('body'))
          <p class="help is-danger">{{ $errors->first('body') }}</p>
        @endif
        </div>
      @endforeach
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