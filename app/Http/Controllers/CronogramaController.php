<?php

namespace App\Http\Controllers;

use App\Models\cronograma;
use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cronograma = cronograma::get();
        return view('Vistacronograma.index',compact('cronograma'));  //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cronograma = cronograma::all();
        return view('Vistacronograma.create',compact('cronograma'));   //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $d)
    {
        $cronograma = new cronograma(); // Cambia 'producto' por 'Producto' si es el nombre correcto de tu modelo
        $cronograma->ci = $d->ci;
        $cronograma->nombre =$d->nombre;
        $cronograma->telefono = $d->telefono;
        $cronograma->correo = $d->correo;
        $cronograma->imagen = $d->imagen;



        if ($imagen = $d->file('imagen')) {
            $rutaGuardarImg = 'imagen/';
            $imagenCronogama = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenCronograma);
            $cronograma->imagen = $imagenCronograma;
        }

        $cronograma->save();


        return redirect()->route('cronograma.index');    //
    }
    /**
     * Display the specified resource.
     */
    public function show(cronograma $cronograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cronograma $cronograma)
    {
        return view('Vistacronograma.edit', compact('cronograma'));  //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, cronograma $cronograma)
    {
        $cronograma->ci = $r->input('ci'); // Campo 'ci'
        $cronograma->nombre = $r->input('nombre'); // Campo 'nombre'
        $cronograma->telefono = $r->input('telefono'); // Campo 'celular'
        $cronograma->correo = $r->input('correo'); // Campo 'correo'
        $cronograma->imagen = $r->input('imagen'); // Campo 'direccion'

        // Actualiza otros campos según sea necesario

        $cronograma->save();


        return redirect()->route('cronograma.index')->with('success', 'Docente actualizado exitosamente pe causa'); //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cronograma $cronograma)
    {
        //
    }
}
