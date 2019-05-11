<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIB</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Akronim" rel="stylesheet">-->
       <link href="https://fonts.googleapis.com/css?family=Freckle+Face|Gloria+Hallelujah" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #48D1CC;
                color: #fff;
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
                right: 20px;
                top: 30px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: 'Freckle Face', cursive;
                text-align: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                top: 20px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .outer{
                background-color:  #fff;
                box-shadow: 5px 5px #4d4d4d;
                border-radius: 70px;
                width: 60%;
                height: 60%;
                float: center;
                position: fixed;
                top:0;
                bottom: 0;
                left: 0;
                right: 0; 
                margin: auto;
            }

            .m-b-md {
                margin-bottom: 60px;
                background: linear-gradient(to bottom,  #00FA9A 20%, #30CFD0 60%, #008080 0%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

        </style>
    </head>
    <body>
    <div class="outer">
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

            <div class="content">
                <div class="title m-b-md">
                    Botella Letras
                </div>

                <div class="links">
                    <a href="/about">About Us</a>
                    <a href="/faq">FAQ</a>
                    <a href="/developers">Developers</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
