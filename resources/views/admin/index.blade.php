@extends('layouts.app')

@section('content')

<h1 style="margin-top:90px;">Persons</h1>

<style>
     .btn.btn-danger
    {
              margin-top: 10px!important;
              
    }
    .newuser{
            background: yellow;
    height: 37px;
    width: 157px;
    margin-left:25%;
    margin-top: -35px;
    display: -webkit-box;

    }

  
</style>
      
      

        <table class="table table-striped">
        	
        	<tr>
        		<th>Id</th>
        	<th>Username</th>
        	<th>Email</th>
        
            <th>Actions</th>
             <th></th>
        	</tr>
        
      @if(count($registers)>0)
        		@foreach($registers as $register)
        	<tr>
        		
        		<td>{{$register->id}}</td>
        	<td>{{$register->Username}}</td>
        	<td>{{$register->Email}}</td>
    
            <td><a href="admin/{{$register->id}}/edit"><button class="btn btn-primary">Edit</button></a>
             </td>
                      <td> {!!Form::open(['action' => ['AdminController@destroy', $register->id], 'method' => 'POST', 'class' => ''])!!}
    {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger','id'=>'delete'])}}
    {!! Form::close() !!}

          </td>
            
            
                          
        	  </tr>

        @endforeach
        
        </table>
        @else
        <p>No person found!!!</p>
        @endif

      
     




@endsection