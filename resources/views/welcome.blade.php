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

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <div class="background-img banner-darken banner-darken-components">
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
                        <p>Recipiely</p>
                    </div>

                    <div class="links">
                        <a href="{{ route('recipe-edit') }}">Add Recipe</a>
                        <a href="{{ route('browser') }}">Top Recipes</a>
                        <a href="{{ route('healthy') }}">Healthy Eating</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
