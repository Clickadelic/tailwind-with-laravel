<?php

namespace App\Http\Controllers;
use App\Models\Director;
use App\Http\Requests\StoreDirectorRequest;
use Illuminate\Http\RedirectResponse;

class DirectorController extends Controller
{
    //
    public function index()
    {   
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    public function create()
    {
        return redirect()->route('directors.index');
    }

    public function store(StoreDirectorRequest $request)
    {
        // $director = new Director();
        // $director->fill($request->validated());
        $director = new Director($request->validated());
        $director->save();
        return redirect()->route('directors.index')->with('success', 'Regisseur erfolgreich erstellt!');
    }

    public function show($id)
    {   
        $director = Director::find($id);
        return view('directors.show', compact('director'));
    }

    public function edit($id)
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
        return redirect()->route('movies.index')
                         ->with('success', 'Film wurde aktualisiert!');
    }

    public function destroy()
    {
        return view('directors.destroy');
    }
}
