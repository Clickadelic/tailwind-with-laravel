@extends('base')

@section('title', $director->title)

@section('content')
    <div class="w-96 mx-auto rounded border border-slate-200 bg-white p-3">
        <h2 class="text-2xl font-semibold text-slate-700 mb-3">{{ $director->title }}</h2>
        <p class="text-sm text-slate-600 mb-3">Released: {{ $director->released }}</p>
        <p class="text-slate-600 text-base mb-3">{{ $director->description }}</p>
        <a href="{{ route('directors.edit', $director->id) }}" class="text-blue-600 hover:underline text-sm">Bearbeiten</a>
        <form action="{{ route('directors.destroy', $director) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline text-sm"
                    onclick="return confirm('Diesen Direktor wirklich löschen?')">
                Löschen
            </button>
        </form>
    </div>

@endsection