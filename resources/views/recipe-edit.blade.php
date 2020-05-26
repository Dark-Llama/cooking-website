@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Recipe Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="@if(old('_token') !== null){{ old('title') }}@else{{ $recipe->title }}@endif" required autofocus>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blurb" class="col-md-4 col-form-label text-md-right">{{ __('Blurb') }}</label>

                            <div class="col-md-6">
                                <input id="blurb" type="text" class="form-control @error('blurb') is-invalid @enderror" name="blurb" value="@if(old('_token') !== null){{ old('blurb') }}@else{{ $recipe->blurb }}@endif" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="ingredients" class="col-md-4 col-form-label text-md-right">{{ __('Ingredients') }}</label>

                            <div class="col-md-6">
                                <textarea id="ingredients" class="form-control" name="ingredients" required>@if(old('_token') !== null){{ old('ingredients') }}@else{{ $recipe->ingredients }}@endif</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="instructions" class="col-md-4 col-form-label text-md-right">{{ __('Instructions') }}</label>

                            <div class="col-md-6">
                                <textarea id="instructions" class="form-control" name="instructions" required>@if(old('_token') !== null){{ old('instructions') }}@else{{ $recipe->instructions }}@endif</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="healthy" id="healthy" @if (old('_token') !== null) {{old('healthy')}} @elseif ($recipe->healthy) checked @endif>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Healthy Eating') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
