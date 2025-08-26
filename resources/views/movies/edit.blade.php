@extends('base')

@section('title', $movie->title)

@section('content')
    @include('forms.movie-form', ['movie' => $movie])
@endsection