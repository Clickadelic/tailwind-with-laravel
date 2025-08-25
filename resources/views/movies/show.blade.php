@extends('base')

@section('title', $movie->title)

@section('content')
    <h2 class="text-2xl font-semibold text-slate-700">{{ $movie->title }}</h2>
    <p class="text-sm text-slate-600 mb-3">Released: {{ $movie->released }}</p>
    <p>{{ $movie->description }}</p>
    <a href="{{ route('movies.edit', $movie->id) }}" class="text-blue-600 hover:underline">Edit</a>
@endsection

