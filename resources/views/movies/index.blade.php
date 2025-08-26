@extends('base')

@section('title', 'Movies')

@section('content')
    @include('forms.movie-form')
    <h2 class="text-xl font-semibold text-slate-700 mb-3">Alle Filme</h2>
    <div class="relative w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
        @forelse ($movies as $movie)
            @include('components.movie-card')
        @empty
            <p class="text-xl my-12 col-span-5 text-center text-slate-600">
                Lege Deinen ersten Film an.
            </p>
        @endforelse
    </div>
@endsection

