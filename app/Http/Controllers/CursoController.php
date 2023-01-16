<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function getAll(Request $request) {
        $cursos = DB::table('cursos')->get();
        $response = [
            'success' => true,
            'message' => 'Los cursos han sido obtenidos correctamente',
            'data' => $cursos,
        ];
        return response()->json($response);
    }

    public function alumnos(Request $request) {
        //recogemos el curso
        $curso = Curso::find($request->id);
        //devolvemos el alumno del curso
        return response()->json($curso->alumnos);
    }
}
