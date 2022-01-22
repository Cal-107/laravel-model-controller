@extends('layouts.main')

@section('content')
    <div class="card col-5 mb-5 mr-5">
        <h1>Title: {{ $movie->title }}</h1>
        <h5>Original title: {{ $movie->original_title }}</h5>
        <h5>Nationality: {{ $movie->nationality }}</h5>
        <h5>Date: {{ $movie->date }}</h5>
        <h5>Vote: {{ $movie->vote}}</h5>
    </div>
@endsection