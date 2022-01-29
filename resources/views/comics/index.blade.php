@extends('layouts.main')

@section('content')

<section class="container">
    <h1>Comics</h1>

    @if(session('deleted'))
    <div class="alert alert-success">
        <strong>{{session('deleted')}}</strong>
        Successfully Deleted
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Description</th>
                <th>Description</th>
                <th>Description</th>
                <th colspan="6">ID</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
        
            <td><a href="{{ route('comics.show',$comic->id)}}">Show </a></button></td>

            <td><a href="{{ route('comics.edit', $comic->id)}}">Edit </a></button></td>

            <td>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" class="btn" value="Delete">
                </form>
                
            </td>
            @endforeach
        </tr>
        </tbody>
    </table>   
    
</section>

@endsection