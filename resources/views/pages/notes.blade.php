@extends('layouts.app')

@section('content')

    <style>
    	
    </style>
       
        
            
               
           <table class="table tnote" style="width:100%;">

        <tr class="note">
        	<th class="note">Notes</th>
        	

        </tr>
           		@if(count($notes) > 0)
        @foreach($notes as $note)
     
          <tr class="note">
        	<td><a href="{{route('downloadfile',$note->id)}}">{{$note->file}}</a></td>
        	

        </tr>

         @endforeach
@endif

           </table>
   
       

     @endsection 
