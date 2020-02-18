@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <home-application userId="{{ $userId }}"></home-application>
</div>
@endsection
