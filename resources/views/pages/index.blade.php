<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$post->title ?? ''}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                background-color: #fff;
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

        </style>
    </head>
    <body>
        @extends('layout.app')

        @section('content')
    <h1>Login Page</h1>
    
        <div class="polaroid" style="text-align:center;margin-top:100px!important;">
            <label for="username">Username:</label>
            <input type="text"><br>
            <label for="password">Password:</label>
            <input type="password"><br><br>
            <button class="btn btn-primary" style="margin-top:1px;margin-left:35px;" type="submit">Submit</button>
       <button class="fpass">Forgot Password?</button>
       <button class="regi">Register</button>
        </div>
@endsection
      
    </body>
</html>
