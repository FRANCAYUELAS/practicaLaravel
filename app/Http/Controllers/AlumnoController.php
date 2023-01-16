<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function getAll(Request $request) {
        $alumnos = DB::table('alumnos')->get();
        $response = [
            'success' => true,
            'message' => 'El alumnado ha sido obtenido correctamente',
            'data' => $alumnos,
        ];
        return response()->json($response);
    }

    public function getById(Request $request) {
        $alumno = DB::table('alumnos')->where('id', $request->id)->get();
        $response = [
            'success' => true,
            'message' => 'El alumnado ha sido obtenido correctamente',
            'data' => $alumno,
        ];
        return response()->json($response);
    }

    public function delete(Request $request) {
        $student = DB::table('alumnos')->where('id', $request->id)->get();
        DB::table('alumnos')->where('id', $request->id)->delete();
        $response = [
            'success' => true,
            'message' => 'El alumno ha sido eliminado',
            'data' => $student,
        ];
        return response()->json($response);
    }

    public function create(Request $request) {
        $datos = $request->validate([
            'nombre' => 'required|string|max:32',
            'telefono' => 'nullable|string|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|string|max:64',
            'email' => 'nullable|email:rfc|max:64',
            'sexo' => 'nullable|string|max:16',
        ]);

        DB::table('alumnos')->insert($datos);
        $response = [
            'success' => true,
            'message' => 'Alumno creado',
            'data' => $datos,
        ];
        return response()->json($response, 201);
        //respuesta 201 indica que la solicitud ha tenido exito por lo que se ha creado
    }

    public function update(Request $request) {
        $datos = $request->validate([
            'nombre' => 'string|max:32',
            'telefono' => 'string|max:16',
            'edad' => 'integer',
            'password' => 'string|max:64',
            'email' => 'email:rfc|max:64',
            'sexo' => 'string|max:16',
        ]);

        DB::table('alumnos')->where('id', $request->id)->update($datos);
        
    }

    //
    public function curso(Request $request) {
        //recogemos el alumno
        $alumno = Alumno::find($request->id);
        //devolvemos el curso del alumno
        return response()->json($alumno->curso);
    }

    public function asiento(Request $request) {
        //recogemos el alumno
        $alumno = Alumno::find($request->id);
        //devolvemos el asiento del alumno
        return response()->json($alumno->asiento);
    }
}
