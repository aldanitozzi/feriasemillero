<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use  App\Http\Controllers\CronogramaController;
Route::resource('docente', DocenteController::class)->names('docente');
// Route::resource('cronograma', CronogramaController::class)->names('cronograma');
Route::resource('admin/cronograma', CronogramaController::class)->names('Vistacronograma');
// route::get("admin/cronograma",function(){
//      return view('Vistacronograma.index');
//      }
//      );
