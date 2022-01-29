@extends('layouts.main')

@section('content')

<section class="container">

<h1 >Edit: {{$comic->title}}</h1>

<div class="row">
<div class="col-md-8">
<form action="{{ route('comics.update', $comic->id)}}" method="POST">
    {{-- cross site request forgery --}}
@csrf
@method('PATCH')

<div class="mb-3">
<label for="title" class="form-label">Title</label>
<input type="text" class="form-control" id="title" name="title" value={{$comic->title}}>
</div>

<div class="mb-3">
    <label for="title" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{$comic->description}}</textarea>
</div>

<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <select class="form-control" id="type" name="type">
        <option value="comic-book" @if($comic->type == "comic-book") selected @endif>Comic Book</option>
        <option value="graphic-novel" @if($comic->type == "graphic-novel") selected @endif>graphic-novel</option>
    </select>
</div>

<div class="mb-3">
    <label for="thumb" class="form-label">Image</label>
    <input type="text" class="form-control" id="thumb" name="thumb" value={{$comic->image}}>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price" value={{$comic->price}}>
</div>

<div class="mb-3">
    <label for="sale_date" class="form-label">Sale Date</label>
    <input type="text" class="form-control" id="sale_date" name="sale_date" value={{$comic->sale_date}}>
</div>

<div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name="series" value={{$comic->series}}>
</div>      

    {{-- Verrà inviato dato al route(comics.store) --}}
    <button type="submit" class="btn btn-primary">Update Comic</button>
</form>
</div>
</div>
</section>

@endsection