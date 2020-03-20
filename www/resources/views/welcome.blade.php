<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipiely</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #FDC17C;
                font-family: 'Nunito','Open Sans', sans-serif;
                font-weight: 200;
                height: 100%;
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

            .navbar > a {
                color: #FDC17C;
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
            
            .parallax {
                /* The image used */
                background-image: url('https://www.goodfreephotos.com/albums/food/cooking-ingredients-with-avocado-mushrooms-eggs.jpg');

                /* Full height */
                height: 100%; 

                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            /* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
            @media only screen and (max-device-width: 1366px) {
                .parallax {
                background-attachment: scroll;
                }
            }
        </style>
    </head>
    <body>
        <div class="parallax">
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
                            Recipiely
                        </div>

                        <div class="navbar">
                            <a href="https://laravel.com/docs">Recipies</a>
                            <a href="https://laracasts.com">Drinks</a>
                            <a href="index.php">Home</a>
                            <a href="https://blog.laravel.com">Videos</a>
                            <a href="https://nova.laravel.com">Healthy Eating</a>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
