<?php

namespace App\Http\Controllers;
use App\Models\Director;
use App\Http\Requests\StoreDirectorRequest;

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

    /**
     * Shows the form for editing a director
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDirectorRequest $request)
    {   
        $director = Director::find($request->id);

        return view('directors.update');
    }

    public function show(StoreDirectorRequest $request)
    {   
        $director = Director::find($request->id);
        return view('directors.show', compact('director'));
    }

    public function destroy()
    {
        return view('directors.destroy');
    }
}
