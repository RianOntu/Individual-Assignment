@extends('layouts.app')

@section('content')
<a  href="/register/create"><button id="refresh" class="btn btn-primary">Refresh</button></a>
<h1 style="color:yellow;">Edit Page</h1>

{!! Form::open(['action' => ['HomeController@update',$user->id], 'method' => 'POST']) !!}



<div class="form-group">
    {{Form::label('name', 'Username')}}
    {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Input Username'])}}
</div>
<div class="form-group">
    {{Form::label('email', 'Email')}}
    {{Form::text('email', $user->email, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('password', 'Password')}}
    {{Form::text('password', $user->password, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Password'])}}
</div>
<div class="form-group">
    {{Form::label('password_confirmation', 'Confirm Password')}}
    {{Form::text('password_confirmation', $user->password_confirmation, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Confirm Password'])}}
</div>
<div class="form-group">
    {{Form::label('type', 'Input Type')}}
    {{Form::text('type', $user->type, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type'])}}
</div>

{{Form::hidden('_method','PUT')}}
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection