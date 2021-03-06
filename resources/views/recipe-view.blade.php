@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$recipe->title}}</div>

                <div class="card-body">
                    <div>
                        <p>{{$recipe->blurb}}</p>
                    </div>
                    <div>
                        <p>{!!nl2br(e($recipe->ingredients))!!}</p>
                    </div>
                    <div>
                        <p>{!!nl2br(e($recipe->instructions))!!}</p>
                    </div>
                    <div>
                        <p> @if($recipe->healthy) Healthy <svg class="bi bi-check-box" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 003 14.5h10a1.5 1.5 0 001.5-1.5V8a.5.5 0 00-1 0v5a.5.5 0 01-.5.5H3a.5.5 0 01-.5-.5V3a.5.5 0 01.5-.5h8a.5.5 0 000-1H3A1.5 1.5 0 001.5 3v10z" clip-rule="evenodd"/>
                        </svg>@endif </p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
