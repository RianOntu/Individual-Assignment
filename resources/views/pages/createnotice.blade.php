@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Notice</title>
</head>
<body>

	 {!! Form::open(['action' => 'CreateNoticeController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	 <div class="form-group">
            {{Form::label('From', 'From')}}
            {{Form::text('From', '', ['class' => 'form-control', 'placeholder' => 'From'])}}
        </div>
        <div class="form-group">
            {{Form::label('Subject', 'Subject')}}
            {{Form::text('Subject', '', ['class' => 'form-control', 'placeholder' => 'Subject'])}}
        </div>
        <div class="form-group">
            {{Form::label('Notice', 'Notice')}}
            {{Form::textarea('Notice', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Notice'])}}
        </div>
        <div class="form-group">
            {{Form::label('Date', 'Date')}}
            {{Form::text('Date', '', ['class' => 'form-control', 'placeholder' => 'Date'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	
</body>
</html>


@endsection