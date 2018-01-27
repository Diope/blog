@extends('partials/layout')

@section('content')
  <div class="col-sm-8 blog-main">  
      <h2>{{$post->title}}</h2>
      <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">Mark</a></p>
      <p>{{$post->body}}</p>
  </div>
@endsection

