<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

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
Route::get('/', [PersonasController::class,'index'])->name('Personas.index');
Route::get('/create', [PersonasController::class,'create'])->name('Personas.create');
Route::get('/edit', [PersonasController::class,'edit'])->name('Personas.edit');