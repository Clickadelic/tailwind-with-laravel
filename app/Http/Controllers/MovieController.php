<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // DB Objekt als Query Builder verwenden
        $movies = DB::table('movies')->get();
        // Oder die ControllerMethode ausführen
        // $movies = Movie:all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Since the show the form on the index page, we just redirect to it
     */
    public function create()
    {
        return redirect()->route('movies.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'released' => 'required|integer|min:1940|max:2050',
            'description' => 'nullable|string',
        ]);

        Movie::create($validated);
        return redirect()->route('movies.index')->with('success', 'Film erfolgreich erstellt!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $movie = Movie::find($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'released' => 'required|integer|min:1940|max:2050',
            'description' => 'nullable|string',
        ]);

        $movie->update($validated);

        return redirect()->route('movies.index')
                         ->with('success', 'Film wurde aktualisiert!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')
                         ->with('success', 'Film wurde gelöscht!');
    }
}
