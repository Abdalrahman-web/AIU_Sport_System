<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AIU Sport Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/one.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
        </style>
    </head>
    <body>
        <div class="slider">
           <!-- @if (Route::has('login'))
                <div class="load">
                    @auth
                    </div>
                    <div class="content">
                        <div class="principal">
                            <h1>AIU SPORT</h1>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth  
                 </div>
                </div>
                </div>
            @endif
-->
         <div class="load">
                    </div>
                    <div class="content">
                        <div class="principal">
                        <img src="../img/sport.png" alt="AIU SPORT" width="250" height="300">
                        <h1 style=" font-family: Arial, Helvetica, sans-serif">AIU SPORT SYSTEM</h1>
                        <br>
                        
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block" ><span></span>Log in</a><br>
                        <a href="{{ route('register') }}" class="btn btn-secondary btn-lg btn-block"><span></span>Register</a>
                 </div>
                </div>
                </div>
    </body>
</html>
