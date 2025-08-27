<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //

    public function index()
    {   
       
        return view('directors.index');
    }

    public function create()
    {
        return redirect()->route('directors.index');
    }

    public function store()
    {
        return view('directors.store');
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
