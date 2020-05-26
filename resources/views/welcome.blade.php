<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipiely</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="parallax">
            <div class="flex-center position-ref full-height">
                <div class="top-left">
                    <!-- Logo Here -->
                </div>
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

                    <div class="links">
                        <a href="{{ route('home') }}">Dashboard</a>
                        <a href="{{ route('browser') }}">Top Recipes</a>
                        <a href="{{ route('healthy') }}">Healthy Eating</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>