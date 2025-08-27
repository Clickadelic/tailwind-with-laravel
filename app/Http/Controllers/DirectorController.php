<?php

namespace App\Http\Controllers;
use App\Models\Director;
use App\Http\Requests\StoreDirectorRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

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

    public function update()
    {
        return view('directors.update');
    }

    public function show()
    {
        return view('directors.show');
    }

    public function destroy()
    {
        return view('directors.destroy');
    }
}
