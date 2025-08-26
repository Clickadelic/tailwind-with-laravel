@extends('base')

@section('title', 'Movies')


@section('content')
    @include('forms.movie-form')
    <h2 class="text-xl font-semibold text-slate-700 mb-3">Alle Filme</h2>
    <div class="relative w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
        @foreach ($movies as $movie)
            <div class="rounded overflow-hidden border border-slate-200 bg-white">
                <header>
                    <a href="{{ route('movies.show', $movie->id) }}" class="hover:opacity-80">
                        <img src="./images/Default-Movie.jpg" alt="Default Movie Image" class="w-full aspect-video before:absolute before:top-0 before:left-0 before:bg-black/30">
                    </a>
                </header>
                <div class="p-3">
                    <p class="text-xs text-slate-600">{{ $movie->released }}</p>
                    <h2 class="text-xl font-semibold text-slate-700">{{ $movie->title }}</h2>
                    <p class="text-sm text-slate-600 mb-3">{{ $movie->description }}</p>
                </div>
                <a href="{{ route('movies.show', $movie->id) }}" class="m-1 block text-center text-white rounded bg-sky-700 px-3 py-2 hover:bg-sky-800">Movie-Details</a>
            </div>
        @endforeach
    </div>
@endsection

