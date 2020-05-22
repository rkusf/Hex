<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
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
        </style>
        
   
    <link rel="stylesheet" href="{{ URL::asset('assets/css/core.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/thesaas.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
<!-- Styles 
    <link href="/assets/css/core.min.css" rel="stylesheet">
    <link href="/assets/css/thesaas.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
-->
    <link rel="icon" href="public/assets/logo.png">
    </head>
    <body>


  <!-- Header -->
    <header class="header header-inverse h-fullscreen p-0 bg-primary overflow-hidden" style="background-image: linear-gradient(to right, #434343 0%, black 100%);">
              <canvas class="constellation"></canvas>

         <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>






           </header>
    <!-- END Header -->
    
<div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="hidden-sm-down">Hex A Game For <span class="text-primary" data-type="FUN, Strategy, Wisdom"></span></h1>
            <br>

            <p>
              <a class="btn btn-lg btn-round btn-white mr-12" href="hex.html">PLAY NOW</a>
            </p>
            

          </div>
        </div>
</div>

    <script type="text/javascript" src="{{ URL::asset('assets/js/core.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/thesaas.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
        
 

  <!-- Scripts 
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>
    -->
    </body>
</html>
