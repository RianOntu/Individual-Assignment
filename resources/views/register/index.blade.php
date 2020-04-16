@extends('layout.app')

@section('content')

<h1 style="margin-top:90px;">Persons</h1>


      
      

        <table class="table table-dark">
        	
        	<tr>
        		<th>Id</th>
        	<th>Username</th>
        	<th>Email</th>
        	<th>Phone Number</th>
        	<th>Type</th>
        	</tr>
        
      @if(count($registers)>0)
        		@foreach($registers as $register)
        	<tr>
        		
        		<td>{{$register->id}}</td>
        	<td>{{$register->Username}}</td>
        	<td>{{$register->Email}}</td>
        	<td>{{$register->Phone_Number}}</td>
        	<td>{{$register->Type}}</td>
                          
        	  </tr>

        @endforeach
        
        </table>
        @else
        <p>No person found!!!</p>
        @endif

      
     




@endsection