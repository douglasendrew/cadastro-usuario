<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar()
    {
        // dd(Hash::make('123'));
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email|unique:usuarios,email",
            "senha" => "required|min:6"
        ]);

        if(UsuarioModel::cadastrar($request))
        {
            return view('usuario.sucesso', [
                "name" => $request->input('nome')
            ]);
        }else {
            echo "Ops";
        }

    }

}
 