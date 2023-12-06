<?php

namespace App\Http\Controllers;

use App\Models\Calificaciones;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cronograma = Calificaciones::get();
        return view('VistaCalificaciones.index',compact('cronograma'));   //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Calificaciones $calificaciones1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calificaciones $calificaciones1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calificaciones $calificaciones1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calificaciones $calificaciones1)
    {
        //
    }
}
