@extends('layouts.app')

@section('content')


	
       @if(count($notices)>0)

        <table class="table notice">
             @foreach($notices as $notice)
                    <tr>
            	<thead>
                <th>From</th></tr></thead>
                    <tr> <td>{{$notice->From}}</td></tr>
            <tr>
            	<thead>
                <th>Subject</th></tr></thead>
                    <tr> <td>{{$notice->Subject}}</td></tr>
           
          
           
         <tr>
         	    <thead>
                <th class="thead-dark">Notice</th></tr></thead>
          <tr> <td>{{$notice->Notice}}</td></tr>
                 <tr>
            	<thead>
                <th>Date</th></tr></thead>
                    <tr> <td>{{$notice->Date}}</td></tr>
         
     
              @endforeach
              @endif 



@endsection