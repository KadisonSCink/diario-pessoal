<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotaController;
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

Route::get('/notas/criar', function () {
    return view('diario.create');
});

Route::get('/notas/criar', [NotaController::class, 'create'])->name('notas.create');

Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');

Route::get('/notas/{id}/editar', [NotaController::class, 'edit'])->name('notas.edit');
Route::put('/notas/{id}', [NotaController::class, 'update'])->name('notas.update');

Route::delete('/notas/{id}', [NotaController::class, 'destroy'])->name('notas.destroy');

Route::get('/menu', function () {
    return view('diario.menu');
});

