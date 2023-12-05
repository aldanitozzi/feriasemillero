<?php

namespace App\Http\Controllers;
use App\Models\Nota;
use Illuminate\Http\Request;


class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'materia' => 'required',
            'nota' => 'required|numeric',
        ]);

        Nota::create($request->all());

        return redirect()->route('notas.index')->with('success', 'Nota agregada correctamente.');
    }
}
