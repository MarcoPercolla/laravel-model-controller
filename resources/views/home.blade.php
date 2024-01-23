@extends('layouts.app')

@section('content')
<h1>film</h1>
<div class="container">
    @foreach ($movies as $movie)
    <div class="card">
        <h3>{{$movie->title}}</h3>
        <h5>{{$movie->original_title}}</h5>
        <p>{{$movie->nationality}}</p>
        <p>{{$movie->vote}}</p>

    </div>   
    @endforeach
</div>

@endsection