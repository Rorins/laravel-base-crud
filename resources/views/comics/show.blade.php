@extends('layouts.main')

@section('content')

<section class="container">

<h1>{{$comic->title}}</h1>

<div class="row">
    <div class="col-md-6">
        {{$comic->description}}
    </div>
    <div class="col-md-6">
        <div class=" d-flex justify-content-center">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="text-center">
            <h4>{{$comic->price}}</h4>
            <h4>{{$comic->series}}</h4>
        </div>
    </div>

</div>

</section>

@endsection