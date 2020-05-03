@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Recipes') }}</div>

                <div class="card-body">
                    @if(count($recipes) > 0) 
                        @foreach($recipes as $recipe)
                                <div>
                                    <h3>{{$recipe->title}}</h3>
                                    <h4> @if($recipe->healthy) <small>Healthy <svg class="bi bi-check-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd"/>
                                    </svg></small>@endif </h4>
                                </div>
                                <div>
                                    <p>{{$recipe->blurb}}</p>
                                    <div>
                                        <a class="btn btn-light" href="{{url(route('recipe-edit',$recipe->id))}}">Edit</a>
                                        <a class="btn btn-light" href="{{url(route('recipe-edit',$recipe->id))}}">View</a>
                                    </div>
                                    {{--<p>{!!nl2br(e($recipe->ingredients))!!}</p>
                                    <p>{!!nl2br(e($recipe->instructions))!!}</p>--}}
                                </div>
                        @endforeach
                    @else
                        <p>No recipes, yet!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
