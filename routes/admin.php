<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;
use  App\Http\Controllers\CronogramaController;
use  App\Http\Controllers\Calificaciones1sController;

Route::resource('docente', DocenteController::class)->names('docente');
// Route::resource('cronograma', CronogramaController::class)->names('cronograma');
Route::resource('calificaciones', CronogramaController::class)->names('cronograma');
Route::resource('cronograma', Calificaciones1sController::class)->names('calificaciones');
// route::get("admin/cronograma",function(){
//      return view('Vistacronograma.index');
//      }
//      );
