@extends('layout.master')

@section('content')

   @foreach($posts as $post)
                  <div class="post-1 line">
                     <!-- image -->
                     <div class="s-12 l-11 post-image">
                        <a href="{{ route('post',['post_id' => $post->id]) }}">
                          <img src="{{ $post->img }}" alt="{{$post->title}}"></a>
                     </div>
                     <!-- date -->
                     <div class="s-12 l-1 post-date">
                        <p class="date" >{{$post->created_at->diffForHumans()}}</p>
                     </div>
                  </div>
                  <!-- text -->
                  <div class="post-text">
                     <a href="{{ route('post',['post_id' => $post->id]) }}">
                        <h2>{{ $post->title }}</h2>
                     </a>
                     <p>
                       {{ $post->body }}
                    </p>
                     <a class="continue-reading" href="{{ route('post',['post_id' => $post->id]) }}">
                       Continue reading</a>
                  </div><hr>
          @endforeach
          <span class="paginate">
            {!! $posts->render() !!}
          </span>

@stop
