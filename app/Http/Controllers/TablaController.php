<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class TablaController extends Controller
{
    //
    public function obtenerDatosTabla(Request $request)
    {
        // Lógica para obtener los datos de la tabla según la página especificada en la solicitud ($request->page)
        $memberships = Membership::all();

        // Retorna los datos de la tabla en un formato adecuado (por ejemplo, en formato JSON)
    }
}
