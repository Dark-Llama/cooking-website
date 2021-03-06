@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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

                <div class="links">
                    <a href="{{url(route('recipe-list'))}}">My Recipes</a>
                    <a href="https://laravel.com/docs">Top Recipes</a>
                    <a href="https://laracasts.com">Home</a>
                    <a href="https://laravel-news.com">Healthy Eating</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
    