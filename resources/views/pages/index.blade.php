@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 

<style>
    .far.fa-plus-square
    {
        margin-left: 14px;
        margin-top: 10px;
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

<h1 style="margin-top:90px;">Persons</h1>

      
       @if(count($users)>0)

        <table class="table table-dark">
            
            <tr>
                <th>Id</th>
            <th>Username</th>
            <th>Email</th>
           
            <th>Actions</th>
             <th></th>
            </tr>
        
     
                @foreach($users as $user)
            <tr>
                
                <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
           
            <td><a href="home/{{$user->id}}/edit"><button class="btn btn-primary">Edit</button></a>
    </td>
<td>
    {!!Form::open(['action' => ['HomeController@destroy', $user->id], 'method' => 'POST', 'class' => ''])!!}
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

      
     





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
