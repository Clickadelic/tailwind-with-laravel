<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // DB Objekt als Query Builder verwenden
        // $movies = DB::table('movies')->get();
        // Oder die ControllerMethode ausführen
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    /**
     * Since we show the form on the index page, we just redirect to it
     * and don't need to create a create method and a route
     */
    public function create()
    {
        return redirect()->route('movies.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());
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
    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $validated = $request->validated();
        $movie->update($validated);
        return redirect()->route('movies.index')
                         ->with('success', 'Film wurde aktualisiert!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')
                         ->with('success', 'Film wurde gelöscht!');
    }
}
