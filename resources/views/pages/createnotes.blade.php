@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Notice</title>
</head>
<body>

	 {!! Form::open(['action' => 'NotesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	  <div class="form-group">
            {{Form::file('file')}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	
</body>
</html>


@endsection