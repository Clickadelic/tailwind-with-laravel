<div class="rounded overflow-hidden border border-slate-200 bg-white">
    <header>
        <a href="{{ route('movies.show', $movie->id) }}" class="hover:opacity-80">
            <img src="{{ asset('images/Default-Movie.jpg') }}" 
                alt="Default Movie Image" 
                class="w-full aspect-video">
        </a>
    </header>
    <div class="p-3">
        <p class="text-xs text-slate-600">{{ $movie->released }}</p>
        <h2 class="text-xl font-semibold text-slate-700">{{ $movie->title }}</h2>
        <p class="text-sm text-slate-600 mb-3">{{ $movie->description }}</p>
    </div>
    <a href="{{ route('movies.show', $movie->id) }}" 
    class="m-1 block text-center text-white rounded bg-sky-700 px-3 py-2 hover:bg-sky-800">
    Movie-Details
    </a>
</div>