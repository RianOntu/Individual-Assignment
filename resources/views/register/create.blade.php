@extends('layout.app')

@section('content')
<a  href="/registers"><button id="refresh" class="btn btn-primary">Refresh</button></a>
<h1>Register Here</h1>

{!! Form::open(['action' => 'RegisterController@store', 'method' => 'POST']) !!}


<div class="form-group">
    {{Form::label('Username', 'Username')}}
    {{Form::text('Username', '', ['class' => 'form-control', 'placeholder' => 'Input Username'])}}
</div>
<div class="form-group">
    {{Form::label('Email', 'Email')}}
    {{Form::text('Email', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('Password', 'Password')}}
    {{Form::text('Password', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Password'])}}
</div>
<div class="form-group">
    {{Form::label('Confirm_Password', 'Confirm Password')}}
    {{Form::text('Confirm_Password', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Confirm Password'])}}
</div>
<div class="form-group">
    {{Form::label('Phone_Number', 'Phone Nmber')}}
    {{Form::text('Phone_Number', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
</div>
<div class="form-group">
    {{Form::label('Type', 'User Type')}}
    {{Form::text('Type', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter User Type'])}}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection