@extends('layout.masterpage')

@section('title')
  {{$post->title}}
@stop

@section('content')

                  <div class="post-1 line">
                     <!-- image -->
                     <div class="s-12 l-11 post-image">
                        <img src="../{{$post->img}}" alt="{{$post->title}}">
                     </div>
                     <!-- date -->
                     <div class="s-12 l-1 post-date">
                        <p class="date" >{{$post->created_at->diffForHumans()}}</p>
                     </div>
                  </div>
                  <!-- text -->
                  <div class="post-text">
                        <h2>{{ $post->title }}</h2>
                     <p>
                       {{ $post->body }}
                    </p>
                  </div>

@stop
