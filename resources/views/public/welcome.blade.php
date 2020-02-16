@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{env('APP_NAME')}}
                </div>
                <div class="tagline m-b-md">
                    <p>{{env('APP_NAME')}} is an API Client with no restrictions</p>
                    <p>A high-performance platform for making requests</p>
                    <p>A Developer's toolbox for understanding APIs</p>
                </div>

                <div class="links">
                    <a href="{{ env('APP_URL') }}/docs">Docs</a>
                    <a href="{{ env('APP_URL') }}/news">News</a>
                </div>
            </div>
        </div>
@endsection