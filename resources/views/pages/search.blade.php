 
@extends('layouts.app')

@section('content')


<form action="/search1" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="name"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary" style="margin-top:14%!important">Search
        
        
            </button>
    </div>
</form>
<div class="container">
    @if(isset($users))
        @if(count($users)>0)
    <h2 class="sample" style="margin-top: 4%;">Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    @endif
</div>
@endsection