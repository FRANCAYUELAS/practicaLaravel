<?php

use App\Http\Controllers\AlumnoController;
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
Route::prefix('/alumnos')->group(function() {
    Route::get('', [AlumnoController::Class, 'getAll']);
    Route::middleware('validate.id')->get('/{id}', [AlumnoController::Class, 'getById']);
    Route::middleware('validate.id')->delete('/{id}', [AlumnoController::Class, 'delete']);
    Route::post('', [AlumnoController::Class, 'create']);
    Route::middleware('validate.id')->patch('/{id}', [AlumnoController::Class, 'update']);
});