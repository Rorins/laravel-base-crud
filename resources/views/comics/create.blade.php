@extends('layouts.main')

@section('content')

<section class="container">

<h1>New Create</h1>

<div class="row">
<div class="col-md-8">
<form action="{{ route('comics.store')}}" method="POST">
    {{-- cross site request forgery --}}
@csrf

<div class="mb-3">
<label for="title" class="form-label">Title</label>
<input type="text" class="form-control" id="title" name="title">
</div>

<div class="mb-3">
    <label for="title" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description"></textarea>
</div>

<div class="mb-3">
    <label for="thumb" class="form-label">Image</label>
    <input type="text" class="form-control" id="thumb" name="thumb">
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price">
</div>    

<div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name="series">
</div>      

    {{-- Verrà inviato dato al route(comics.store) --}}
    <button type="submit" class="btn btn-primary">Create Comic</button>
</form>
</div>
</div>
</section>

@endsection