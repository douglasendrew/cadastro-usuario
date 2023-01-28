<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as modelUsuario;

class Usuario extends Controller
{
    public function salvar(Request $request)
    {
        if(modelUsuario::cadastrar($request))
        {
            return response("ok", 201);
        }else {
            return response("erro", 409);
        }
    }
}
