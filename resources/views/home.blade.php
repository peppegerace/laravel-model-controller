@extends('layouts.main')

@section('content')

<h1>Movies</h1>

<div class="row">

    @foreach ($movies as $movie)

    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">Titolo: {{ $movie->title }}</h4>
            <h5>Titolo originale: {{ $movie->original_title }}</h5>
            <a class="btn btn-info" href="{{ route('details', ['id' => $movie->id])}}">Maggiori dettagli</a>
            {{-- <p class="card-text">Paese d'origine: {{ $movie->nationality}}</p>
            <p class="card-text">Data d'uscita: {{ $movie->date }}</p>
            <p class="card-text">Voto: {{ $movie->vote }}</p> --}}
        </div>
    </div>

    @endforeach

</div>


@endsection
