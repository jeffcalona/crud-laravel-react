<?php

use App\Http\Controllers\Api\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(TareaController::class)->group(function () {
    Route::get('/tareas', 'index');
    Route::post('/tarea', 'store');
    Route::get('/tarea/{id}', 'show');
    Route::put('/tarea/{id}', 'update');
    Route::delete('/tarea/{id}', 'destroy');
});