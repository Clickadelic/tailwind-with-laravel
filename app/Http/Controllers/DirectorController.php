<?php

namespace App\Http\Controllers;
use App\Models\Director;
use App\Http\Requests\StoreDirectorRequest;
use Illuminate\Http\RedirectResponse;

class DirectorController extends Controller
{
    /**
     * Displays a list of all directors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    /**
     * Redirects to the director index page since we don't need a create page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return redirect()->route('directors.index');
    }

    /**
     * Store a newly created director in storage.
     *
     * @param  \App\Http\Requests\StoreDirectorRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDirectorRequest $request)
    {
        // $director = new Director();
        // $director->fill($request->validated());
        $director = new Director($request->validated());
        $director->save();
        return redirect()->route('directors.index')->with('success', 'Direktor erfolgreich erstellt!');
    }

    /**
     * Show the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {   
        $director = Director::find($id);
        return view('directors.show', compact('director'));
    }

    public function edit(string $id)
    {   
        $director = Director::find($id);
        return view('directors.edit', compact('director'));
    }

    /**
     * Shows the form for editing a director
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDirectorRequest $request, Director $director): RedirectResponse
    {   
        $validated = $request->validated();
        $director->update($validated);
        return redirect()->route('directors.index')
                         ->with('success', 'Direktor wurde aktualisiert!');
    }

    /**
     * Removes the specified director from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Director $director)
    {
        try {
            $director->delete();
            return redirect()->route('directors.index')->with('success', 'Regisseur wurde gelöscht.');
            // Wir beschreiben den auftretenden Fehler mit der entsprechenden Fehlerklasse in PHP als Typ der Übergabe der Variab $e.
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('directors.index')->with('error', 'Dieser Regisseur kann nicht gelöscht werden, da er noch Filme hat.');
        }
    }
}
