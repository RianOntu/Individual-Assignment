 @extends('layout.app')

@section('content')

  <button class="btn btn-primary"><a href="/register" style="color:white">Back To Registers</a> </button> 


 Name:<h3>{{$register->Username}}</h3>
  Email:<h3>{{$register->Email}}</h3>      

     


@endsection