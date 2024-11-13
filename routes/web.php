<?php

use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
use App\Models\Tarea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tareas/index', [TareaController::class, 'index']);
Route::get('/tareas/create', [TareaController::class, 'create']);
Route::post('/tareas/store', [TareaController::class,'store']);
Route::get('/tareas/edit/{id}', [TareaController::class,'edit']);
Route::put('/tareas/update/{id}', [TareaController::class, 'update']);
Route::delete('/tareas/delete/{id}', [TareaController::class, 'delete']);

Route::get('/trabajadores/index', [TrabajadorController::class, 'index']);
Route::get('/trabajadores/create', [TrabajadorController::class, 'create']);
Route::post('/trabajadores/store', [TrabajadorController::class, 'store']);

