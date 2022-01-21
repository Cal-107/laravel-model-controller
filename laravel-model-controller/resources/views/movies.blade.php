@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="card col-5 mb-5 mr-5">
                <h5>Title: {{ $movie->title }}</h5>
                <h5>Original title: {{ $movie->original_title }}</h5>
                <h5>Nationality: {{ $movie->nationality }}</h5>
                <h5>Date: {{ $movie->date }}</h5>
                <h5>Vote: {{ $movie->vote}}</h5>
            </div>
        @endforeach
        </div>
    </section>
@endsection