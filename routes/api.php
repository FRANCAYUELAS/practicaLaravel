<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsientoController;
use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Grupo de rutas de alumnnos 
Route::prefix('/alumnos')->group(function() {

    //RUTAS Y METODOS PARA COGER POR ID CREAR MODIFICAR Y ELIMINAR
    Route::get('', [AlumnoController::Class, 'getAll']);

    Route::post('', [AlumnoController::Class, 'create']);

    //Primero accedemos a validate.id y luego si es correcto va a la funcion getById
    Route::middleware('validate.id')->get('/{id}', [AlumnoController::Class, 'getById']);
    Route::middleware('validate.id')->delete('/{id}', [AlumnoController::Class, 'delete']);
    Route::middleware('validate.id')->patch('/{id}', [AlumnoController::Class, 'update']);
    Route::middleware('validate.id')->get('/{id}/curso', [AlumnoController::Class, 'curso']);
    Route::middleware('validate.id')->get('/{id}/asiento', [AlumnoController::Class, 'asiento']);
});

Route::prefix('/cursos')->group(function() {
    Route::get('', [CursoController::Class, 'getAll']);
    Route::middleware('validate.id')->get('/{id}/alumnos', [CursoController::Class, 'alumnos']);
});

Route::prefix('/asientos')->group(function() {
    Route::get('', [AsientoController::Class, 'getAll']);
    Route::middleware('validate.id')->get('/{id}/alumno', [AsientoController::Class, 'alumno']);
});
