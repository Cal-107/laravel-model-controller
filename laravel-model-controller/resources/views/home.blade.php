@extends('layouts.main')

@section('content')
    <section>
        @foreach($movies as $movie)
        <h1>
           {{ $movie->title }}
        </h1>
        @endforeach
    </section>
@endsection