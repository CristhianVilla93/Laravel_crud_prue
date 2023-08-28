<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AlumnoController::class)->group(function () {
    Route::get('/', 'index')->name('alumnos.index');
    Route::get('/create', 'create')->name('alumnos.create');
    Route::post('/store', 'store')->name('alumnos.store');
    Route::get('/edit/{id}', 'edit')->name('alumnos.edit');
    Route::put('/update/{id}', 'update')->name('alumnos.update');
    Route::get('/delet/{id}', 'delet')->name('alumnos.delet');
    Route::delete('/destroy/{id}', 'destroy')->name('alumnos.destroy');
});

Route::controller(DocenteController::class)->group(function () {
    Route::get('/docente', 'index')->name('docentes.index');
    Route::get('docente/create', 'create')->name('docentes.create');
    Route::post('docente/store', 'store')->name('docentes.store');
    Route::get('docente/edit/{id}', 'edit')->name('docentes.edit');
    Route::put('docente/update/{id}', 'update')->name('docentes.update');
    Route::get('docente/delet/{id}', 'delet')->name('docentes.delet');
    Route::delete('docente/destroy/{id}', 'destroy')->name('docentes.destroy');
});

Route::controller(CursoController::class)->group(function () {
    Route::get('/curso', 'index')->name('cursos.index');
    Route::get('curso/create', 'create')->name('cursos.create');
    Route::post('curso/store', 'store')->name('cursos.store');
    Route::get('curso/edit/{id}', 'edit')->name('cursos.edit');
    Route::put('curso/update/{id}', 'update')->name('cursos.update');
    Route::get('curso/delet/{id}', 'delet')->name('cursos.delet');
    Route::delete('curso/destroy/{id}', 'destroy')->name('cursos.destroy');
});
