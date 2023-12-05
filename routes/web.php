<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\materiasController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\DocenteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


//  route::resource('materias',[materiasController::class,'index']);


// Route::get('HomeController', [HomeController::class, 'index']);
// Route::get('materias', [MateriasController::class, 'index']);
Route::resource('docente', DocenteController::class)->names('docente');

// Route::resource('docente', 'DocenteController@index')->name(class::'docente');


});
