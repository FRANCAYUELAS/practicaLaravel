<?php

namespace App\Http\Controllers;

use App\Models\Asiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsientoController extends Controller
{
    public function getAll(Request $request) {
        $asientos = DB::table('asientos')->get();
        $response = [
            'success' => true,
            'message' => 'Los asientos han sido obtenidos correctamente',
            'data' => $asientos,
        ];
        return response()->json($response);
    }

    public function alumno(Request $request) {
        //recogemos el asiento
        $asiento = Asiento::find($request->id);
        //devolvemos el alumno del asiento
        return response()->json($asiento->alumno);
    }
}
