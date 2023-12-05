<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
Route::resource('docente', DocenteController::class)->names('docente');


route::get("admin/cronograma",function(){
    return view('Vistacronograma.index');
    }
    );
