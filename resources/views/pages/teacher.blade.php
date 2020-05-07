




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Teacher Portal</title>
	    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/57991cf767.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="sidenav">
  <i class="fas fa-house-user"></i><a href="#">Home</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div class="upperbox">

 <a class="notes" style="color:black"href="#"><div ><i syle="color:blue;" class="far fa-newspaper"></i></div><p style="margin-top:7px;margin-left:10px;">Upload Notes</p></a>
<a class="notes2" style="color:black"href="/createnotice"><div ><i class="fas fa-envelope-open-text"></i></div><p style="margin-top:7px;margin-left:10px;">Upload Notice</p></a>
<a class="notes3" style="color:black"href="#"><div ><i class="fas fa-money-check-alt"></i></div><p style="margin-top:7px;margin-left:10px;">Salary</p></a>

<div>
	<h3 class="welcome">Welcome</h3><br>

      

</div>

 <!--Logout-->
 
                                    <a class="dropdown" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout').submit();">
                                        {{ __('Logout') }}<i class="fas fa-sign-out-alt"></i>
                                    </a>
 

                                    <form id="logout" action="{{route('logout')}}" method="POST" style="">
                                        @csrf

                                       
                                    </form>
                      
         </div>               
	<style>
		.dropdown {
  background: yellow;
  height: 39px;
  display: block;
  width: 124px;
  margin-left: 85%;
  margin-top: -7%;
}
		.one
		{
           background: white;
           border:1px solid black;
		}
		.two
		{
           background: white;
           border:1px solid black;
		}
		.three
		{
           background: white;
           border:1px solid black;
		}
		.four
		{
           background: white;
           border:1px solid black;
		}
		th,td
		{
			padding:31px;
		}
	</style>
</div>
<div class="routine">
	<table style="width:100%;margin-left:30px;">

  <tr class="one">
    <th>Sunday</th>
    <td>9-11 am English-1</td> 
    <td>11-1 pm Math-1</td>
  </tr>
  <tr class="two">
    <th>Monday</th>
    <td>9-11 am Physics-1</td>
    <td>11-1 pm Chemistry-1</td>
  </tr>
  <tr class="three">
    <th>Tuesday</th>
    <td>9-11 am English-2</td>
    <td>11-1 am Math-2</td>
  </tr>
  <tr class="four">
    <th>Wednesday</th>
   <td>9-11 am Physics-2</td>
    <td>11-1 pm Chemistry-2</td>
  </tr>
</table>

</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>



