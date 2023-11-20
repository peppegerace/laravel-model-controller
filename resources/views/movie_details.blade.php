@extends('layouts.main')

@section('content')

<h1>{{ $movie->original_title }}</h1>

<div class="card m-3" style="width: 18rem;">
    <div class="card-body">
        <h4 class="card-title">Titolo: {{ $movie->title }}</h4>
        <h5>Titolo originale: {{ $movie->original_title }}</h5>
        <p class="card-text">Paese d'origine: {{ $movie->nationality}}</p>
        <p class="card-text">Data d'uscita: {{ $movie->date }}</p>
        <p class="card-text">Voto: {{ $movie->vote }}</p>
    </div>
</div>

<a class="btn btn-warning" href="{{ route('home') }}">Torna alla lista dei film</a>

@endsection
