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
                    </p><br>
                    <hr>

     @if(Auth::check())
        <div class="comment">
          <form  action="" method="post">
             <h4 style="color:green">What's Your Idea?</h4>
             <textarea name="comment" rows="4" cols="40"></textarea><br>
             <button type="button" name="button">Post</button>
          </form>
        </div>
      @else

      <div class="comment">
        <h4 style="color:red">Please SignUp To add Comment</h4>
      </div>
      @endif
                  </div>

@stop
