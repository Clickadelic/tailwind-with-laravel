@extends('base')

@section('title', 'Startseite')

@section('content')
    <h2 class="text-2xl mb-3">Hallo Startseite</h2>
    <p>Das ist meine erste Blade-Seite 🎉</p>
    <hr class="my-12 text-slate-200">
    <h3 class="text-xl mb-3">Blade Link-Komponente</h3>
    <x-link href="/" variant="warning" asButton="true" title="Zur Startseite">
        zur Startseite
    </x-link>
@endsection