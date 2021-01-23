@extends('layout')
<div id="wrapper">
  <div id="page" class="container">
    <div id="content">
      <div class="title">
         @foreach ($articles as $article)
<h2>Welcome to our website</h2>
        <span class="byline">{{$article->title}}</span> </div>
      <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
          <p><a href="#">{{$article->excerpt}}</a></p>
        </li>

        <div>
      <h3>
<a href="/articles/{{$article->id}}/edit">edit</a>
          </h3>
    </div>
        @endforeach
        
      
    </div>
    