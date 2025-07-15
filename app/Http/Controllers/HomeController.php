<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function buscarPaciente(Request $request)
    {
        $q = $request->get('q');

        $personas = Persona::select(
            'id',
            DB::raw("CONCAT(nombres, ' ', ap_paterno, ' ', ap_materno) as nombre_completo"),
            'nro_documento'
        )
        ->where(function ($query) use ($q) {
            $query->where(DB::raw("CONCAT(nombres, ' ', ap_paterno, ' ', ap_materno)"), 'like', "%{$q}%")
                ->orWhere('nro_documento', 'like', "%{$q}%");
        })
        ->limit(10)
        ->get();
        return response()->json($personas);
    }
}
