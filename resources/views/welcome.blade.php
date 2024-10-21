@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

    <h1>
        Laravel Model Controller
    </h1>

    <div class="row">

        @foreach ($movies as $movie)

            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Title: {{ $movie->title }}</h5>
                    <p class="card-text">ID: {{ $movie->id }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Original Title: {{ $movie->original_title }} </li>
                        <li class="list-group-item">Nationality: {{ $movie->nationality }} </li>
                        <li class="list-group-item">Date: {{ $movie->date }} </li>
                        <li class="list-group-item">Vote: {{ $movie->vote }} </li>
                    </ul>
                </div>
            </div>

        @endforeach

    </div>

@endsection
