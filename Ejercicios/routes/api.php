<?php



use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\NotaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('asignatura', AsignaturaController::class);
Route::apiResource('nota', NotaController::class);