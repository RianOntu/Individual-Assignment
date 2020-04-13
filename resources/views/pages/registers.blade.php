@extends('layout.app')

@section('content')
<a  href="/registers"><button id="refresh" class="btn btn-primary">Refresh</button></a>
<h1>Register Here</h1>

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

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


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection