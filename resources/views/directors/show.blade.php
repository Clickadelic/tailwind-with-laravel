@extends('base')

@section('title', $director->name)

@section('content')
    <div class="w-96 mx-auto rounded border border-slate-200 bg-white p-3">
        <h2 class="text-2xl font-semibold text-slate-700 mb-3">{{ $director->name }}</h2>
        
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