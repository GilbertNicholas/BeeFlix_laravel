@extends('home')

@section('content')
<div class="section" id="movieGenre">
    <h2>{{ $genre->name }}</h2>

    <div class="section" id="movieList">
        <div class="row">
            @foreach ($movies as $movie)
                @if ($movie->genre_id == $genre->id)
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{ asset(''.$movie->photo) }}" class="card-img-top" alt="" width="200px" height="500px">
                        <div class="card-body">
                            <h5 class="card-title" id="movieTitle">{{ $movie->title }}</h5>
                            <a href="{{ route('movies.show', ['movie' => $movie->id]) }}" class="btn btn-primary" id="btnMovie">Lihat Film</a>
                            @csrf
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

</div>
@endsection
