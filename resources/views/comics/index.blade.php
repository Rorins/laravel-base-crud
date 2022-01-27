@extends('layouts.main')

@section('content')

<section class="container">
    <h1>Comics</h1>

    @foreach ($comics as $comic)
    <h2>{{$comic->id}}</h2>
    <h2>{{$comic->title}}</h2>
    <h2>{{$comic->description}}</h2>
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    <h2>{{$comic->price}}</h2>
    <h2>{{$comic->series}}</h2>
    @endforeach
</section>

@endsection