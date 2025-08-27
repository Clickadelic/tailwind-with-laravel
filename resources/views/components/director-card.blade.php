<div class="rounded overflow-hidden border border-slate-200 bg-white">
    <header>
        <a href="{{ route('directors.show', $director->id) }}" class="hover:opacity-80">
            <img src="{{ asset('images/Default-director.jpg') }}" 
                alt="Default director Image" 
                class="w-full aspect-video">
        </a>
    </header>
    <div class="p-3">
        <h2 class="text-xl font-semibold text-slate-700">{{ $director->name }}</h2>
    </div>
    <a href="{{ route('directors.show', $director->id) }}" 
    class="m-1 block text-center text-white rounded bg-sky-700 px-3 py-2 hover:bg-sky-800">
    director-Details
    </a>
</div>