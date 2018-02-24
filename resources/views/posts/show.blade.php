@extends('partials/layout')

@section('content')
  <div class="col-sm-8 blog-main">  
      <h2>{{$post->title}}</h2>

      @if(count($post->tags))
        <ul>
          @foreach($post->tags as $tag)
            <li>
            <a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
            </li>
            @endforeach
        </ul>
        @endif

      <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->user->name}}</a></p>
      <p>{{$post->body}}</p>
      <hr>

      @include('partials.flash')

      <div class="comments">
        <ul class="list-group">
          @foreach($post->comments as $comment)
          <li class="list-group-item">
            <strong>
              {{$comment->created_at->diffForHumans()}}: &nbsp;
            </strong>
            {{$comment->body}}
          </li>
          @endforeach
        </ul>
      </div>

      {{--  Add a comment  --}}

     

      <hr>
      <div class="card">
        <div class="card-block">
          <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{csrf_field()}}

            <div class="form-group">
              <textarea name="body" placeholder="Your comment here" class="form-control" cols="30" rows="6"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Leave Comment</button>
            </div>

          </form>
        </div>
      </div>

  </div>
@endsection

