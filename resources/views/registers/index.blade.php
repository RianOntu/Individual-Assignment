@extends('layout.app')

@section('content')

<h1>Persons</h1>

@if(count($registers) > 0)
      @foreach($registers as $register)
      <div class="p-3 mb-2 bg-dark text-white">
      <h3><a href="/registers/{{$register->id}}">{{$register->Username}}</a></h3>
      </div>

        

      @endforeach
     {{$registers->links()}}
@else
        <p>No Person found!!!</p>

@endif

@endsection