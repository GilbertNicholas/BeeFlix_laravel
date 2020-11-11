@extends('home')

@section('content')
{{-- @php
    var_dump($episode);
@endphp --}}
    <div class="section" id="containerDetails">
        <div class="row">
            <div class="col-md">
                <img src="{{ asset(''.$movie->photo) }}" class="rounded mx-auto d-block img-fluid" alt="" id="imgDetail">
            </div>
            <div class="col-md">
                <h2>{{ $movie->title }}</h2>
                @for ($i = 0; $i < $movie->rating; $i++)
                    <span class="fa fa-star" id="star"></span>
                @endfor
                @if ($movie->rating < 5)
                    @for ($i = 0; $i < 5-$movie->rating; $i++)
                        <i class="fa fa-star-o" id="star"></i>
                    @endfor
                @endif
                <h4><span id="star">{{ $movie->rating }}</span> / 5 Star Review</h4>
                <p>{{ $movie->description }}</p>

                <h4 id="category">Kategori : <a href="{{ route('genres.show', ['genre' => $genre->id]) }}">{{ $genre->name }}</a></h4>
            </div>
            <div class="col-md">
                <h3>EPISODE</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Episode</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>
                                <th scope="row">Episode {{ $episode->episode }} : </th>
                                <td>{{ $episode->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $episodes->links() }}
            </div>
        </div>

    </div>

@endsection
