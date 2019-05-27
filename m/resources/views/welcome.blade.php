<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIB</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Akronim" rel="stylesheet">-->
       <link href="https://fonts.googleapis.com/css?family=Freckle+Face|Gloria+Hallelujah|Carter+One" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #008B8B;
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
                right: 100px;
                top: 20px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family: 'Freckle Face', cursive;
                text-align: center;
            }

            .links a {
                font-family: 'Carter One', cursive;
                padding: 5px 40px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .2rem;
                top: 20px;
                color: #ffa64d;
                text-shadow: 1px 2px #001a33;
                text-decoration: none;
                text-transform: uppercase;
            }

            .outer{
                background-color:  #fff;
                box-shadow: 7px 9px #2F4F4F;
                border-radius: 500px;
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
