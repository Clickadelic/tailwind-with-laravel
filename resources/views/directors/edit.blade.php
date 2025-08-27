@extends('base')

@section('title', $director->name)

@section('content')
    @include('forms.director-form', ['director' => $director])
@endsection