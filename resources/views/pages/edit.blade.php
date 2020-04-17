@extends('layout.app')

@section('content')
<a  href="/register/create"><button id="refresh" class="btn btn-primary">Refresh</button></a>
<h1 style="color:yellow;">Edit Page</h1>

{!! Form::open(['action' => ['RegisterController@update',$register->id], 'method' => 'POST']) !!}



<div class="form-group">
    {{Form::label('Username', 'Username')}}
    {{Form::text('Username', $register->Username, ['class' => 'form-control', 'placeholder' => 'Input Username'])}}
</div>
<div class="form-group">
    {{Form::label('Email', 'Email')}}
    {{Form::text('Email', $register->Email, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('Password', 'Password')}}
    {{Form::text('Password', $register->Password, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Password'])}}
</div>
<div class="form-group">
    {{Form::label('Confirm_Password', 'Confirm Password')}}
    {{Form::text('Confirm_Password', $register->Confirm_Password, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Confirm Password'])}}
</div>
<div class="form-group">
    {{Form::label('Phone_Number', 'Phone Number')}}
    {{Form::text('Phone_Number', $register->Phone_Number, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
</div>
<div class="form-group">
    {{Form::label('Type', 'User Type')}}
    {{Form::text('Type', $register->Type, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter User Type'])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection