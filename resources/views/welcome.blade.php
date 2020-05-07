<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
             <link rel="stylesheet" href="resources/css/animate.css">
                <link rel="stylesheet" href="resources/views/style.css">
        <!-- Styles -->
        <style>
        input
        {
            margin-top: 12px;
        }
                   .polaroid
                   {
                    text-align: center;

               margin-top: 198px;

               border: 1px solid black;

                height: 197px;

                   width: 317px;

                    margin-left: 39%; 
                   }
            html, body {

   

          

                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .regi
            {
                display: grid;

                margin-left: 220px;

                 margin-top: -20px;
            }
            .fpass
            {
                margin-top: 17px;
                 display: grid;
                 margin-left: 10px;
            }
            .polaroid
            {
                background:wheat;
            }

            h1
            {
                text-align:center;
            }
            #login
            {
                margin-left:45%;
                margin-top:61px
            }
            #register
            {
              
                margin-top:61px
            }
            .home_head
{
  margin-top:17px;
  height: 1px;
  padding: 46px;
  background:yellow;
  width: 63%;
    margin-left:258px;
}
.hh
{
  margin-top: -24px;
  text-align: center;
   margin-left: -13px;
   color:black;
}
.description
{
  height:114px;
  margin-top:96px;
  width:36%;
  background:antiquewhite;
  box-shadow: 1px 16px 27px 1px rgba(1, 1, 1, 1);
  margin-left:33%;
  border-radius:9px;
   top: 17px;
     display: -webkit-inline-box;
}
.description p
{
  
  text-align: center;
     top: 17px;
     display: -webkit-inline-box;

}
.sign_log
{
  margin-top: 332px;
height: 23%;
width: 9%;
margin-left: 42%;
text-align: center;
position: absolute;
padding: 50px;
background:
transparent;
top: 11%;
left: 1%;
position: absolute;
}
#register
{
    color:black;
  background: aqua; 
  height: 33px;

width: 452px;

margin-left: -802%;
margin-top:9px;
}
#login
{
    color:black;
  background: aqua; 
  height: 33px;

  width: 452px;
margin-left: -804%;

margin-top: -31px;

  
}

body
{
    background-image: url(1.jpg);
background-repeat: no-repeat;
background-size: cover;
}

        </style>
    </head>
    <body>
            <h1 style="margin-top:0px!important;color:white;"><b>Home Page</b></h1>
 <div class="home_head animated slideInUp">
    <h1 class="hh" style="position:sticky;">Welcome To Our Website</h1>
  </div>

  <div class="description animated slideInUp">
    <p>
        <b>This website is for helping each other.Place your work order.Get your work done with your desired amount of money.
        We serve 24/7.Thank you for visiting our site.</b>

    </p>

  </div>

        <div>

    
    </div>
    
    <div class="sign_log">
       <a href="/register"><button class="sign polaroid2" id="register" style="border-radius:2px;" name="sign_up"><b>Sign Up<b></button></a> <br>
     
       <a href="/login"><button class="log polaroid2" id="login"  style="border-radius:2px;" name="log_in" ><b>Log In</b></button></a> 
    </div>

        </div>
      
       
      
    </body>
</html>
