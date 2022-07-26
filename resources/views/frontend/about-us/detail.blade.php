@extends('layout.base')
@section('content')
<div class="container">
    <br>
    <div class="text-center">
        <h1>Meet <small>the</small> Team</h1>
        <p>Our Description</p>
        <hr>
    </div>
    <div class="d-flex justify-content-center">
        <div class="team text-center">
            <img src="{{ $data->profile }}" alt="" style="border-radius: 100%">
            <h4 class="mb-0">{{ $data->nama }}</h4>
            <p>{{  $data->bio }}</p>
            <a href="{{ route('about-us') }}" class="btn btn-primary btn-sm">Back</a>
            <br><br>
        </div>
    </div>
</div>
@endsection