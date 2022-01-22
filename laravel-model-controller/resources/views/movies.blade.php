@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="row">
            @foreach ($movies as $index => $movie)
            <a href="{{ route('detail', ['id' => $index]) }}" class="col-6 mb-5">
                <div class="card">
                    <h4>Title: {{ $movie->title }}</h4>
                    {{-- <h5>Original title: {{ $movie->original_title }}</h5>
                    <h5>Nationality: {{ $movie->nationality }}</h5>
                    <h5>Date: {{ $movie->date }}</h5>
                    <h5>Vote: {{ $movie->vote}}</h5> --}}
                </div>
            </a>
        @endforeach
        </div>
    </section>
@endsection