@extends('layout.app')

@section('content')

<h1 style="margin-top:90px;">Persons</h1>

<style>
    .btn.btn-danger
    {
        margin-top: -2px;
    }
</style>
      
      

        <table class="table table-dark">
        	
        	<tr>
        		<th>Id</th>
        	<th>Username</th>
        	<th>Email</th>
        	<th>Phone Number</th>
        	<th>Type</th>
            <th>Actions</th>
             <th></th>
        	</tr>
        
      @if(count($registers)>0)
        		@foreach($registers as $register)
        	<tr>
        		
        		<td>{{$register->id}}</td>
        	<td>{{$register->Username}}</td>
        	<td>{{$register->Email}}</td>
        	<td>{{$register->Phone_Number}}</td>
        	<td>{{$register->Type}}</td>
            <td><a href="register/{{$register->id}}/edit"><button class="btn btn-primary">Edit</button></a>
             </td>
                      <td> {!!Form::open(['action' => ['RegisterController@destroy', $register->id], 'method' => 'POST', 'class' => ''])!!}
    {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}

          </td>
            
            
                          
        	  </tr>

        @endforeach
        
        </table>
        @else
        <p>No person found!!!</p>
        @endif

      
     




@endsection