<?php

namespace App\Http\Controllers;

use App\Models\Calificaciones1s;
use Illuminate\Http\Request;

class Calificaciones1sController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cronograma = Calificaciones1s::get();
        return view('VistaCalificaciones.index',compact('cronograma'));    //
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
    public function show(Calificaciones1s $calificaciones1s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calificaciones1s $calificaciones1s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calificaciones1s $calificaciones1s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calificaciones1s $calificaciones1s)
    {
        //
    }
}
