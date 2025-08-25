<form action="{{ route('movies.store')}}" method="POST" class="w-96 mx-auto flex flex-col space-y-3 mb-12">
    <h2 class="text-xl font-semibold text-slate-700">Neuer Film</h2>
    @csrf <!-- Cross-Site Request Forgery -->
    <!-- fehlt das csrf oder ist falsch, wird 419-Fehlermeldung angezeigt -->
    <div><input type="text" class="w-full px-3 py-2 border border-slate-400 rounded bg-white" name="title" placeholder="Titel"></div>
    <div><input type="text" class="w-full px-3 py-2 border border-slate-400 rounded bg-white" name="released" min="1940" max="2050" placeholder="Erscheinungsjahr z.B. 1989"></div>
    <div><textarea name="description" class="w-full px-3 py-2 border border-slate-400 rounded bg-white" placeholder="Beschreibung..."></textarea></div>
    <div><button type="submit" class="w-full px-3 py-2 bg-sky-700 text-slate-100 rounded hover:bg-sky-800 hover:cursor-pointer">Movie Hinzufügen</button></div>
</form>