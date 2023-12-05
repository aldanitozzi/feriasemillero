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
    public function show(cronograma $cronograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cronograma $cronograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cronograma $cronograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cronograma $cronograma)
    {
        //
    }
}
