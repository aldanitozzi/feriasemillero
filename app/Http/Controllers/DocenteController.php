<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docente = docente::get();
        return view('Vistadocente.index',compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docente = docente::all();
        return view('Vistadocente.create',compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $d)
    {
        $docente = new docente(); // Cambia 'producto' por 'Producto' si es el nombre correcto de tu modelo
        $docente->ci = $d->ci;
        $docente->nombre =$d->nombre;
        $docente->telefono = $d->telefono;
        $docente->correo = $d->correo;
        $docente->imagen = $d->imagen;



        if ($imagen = $d->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenDocente = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenDocente);
            $docente->imagen = $imagenDocente;
        }

        $docente->save();


        return redirect()->route('docente.index');    //
    }

    /**
     * Display the specified resource.
     */
    public function show(docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docente $docente)
    {
        return view('Vistadocente.edit', compact('docente'));  //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, docente $docente)
    {
        $docente->ci = $r->input('ci'); // Campo 'ci'
        $docente->nombre = $r->input('nombre'); // Campo 'nombre'
        $docente->telefono = $r->input('telefono'); // Campo 'celular'
        $docente->correo = $r->input('correo'); // Campo 'correo'
        $docente->imagen = $r->input('imagen'); // Campo 'direccion'

        // Actualiza otros campos según sea necesario

        $docente->save();


        return redirect()->route('docente.index')->with('success', 'Docente actualizado exitosamente pe causa');   //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(docente $docente)
    {
        //
    }
}
