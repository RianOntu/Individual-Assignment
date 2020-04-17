@extends('layout.app')

@section('content')

<h1>Create Posts</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

<div class="form-group">
    {{Form::label('Username', 'Username')}}
    {{Form::text('Username', '', ['class' => 'form-control', 'placeholder' => 'Input Username'])}}
</div>
<div class="form-group">
    {{Form::label('Email', 'Email')}}
    {{Form::textarea('Email', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('', 'Email')}}
    {{Form::textarea('Email', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection