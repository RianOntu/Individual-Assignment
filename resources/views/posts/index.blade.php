@extends('layout.app')

@section('content')

<h1>Posts</h1>

@if(count($posts) > 0)
      @foreach($posts as $post)
      <div class="p-3 mb-2 bg-dark text-white">
      <h3><a href="/registers/{{$registers->id}}">{{$post->title}}</a></h3>
      </div>

        

      @endforeach
     {{$posts->links()}}
@else
        <p>No post found!!!</p>

@endif

@endsection