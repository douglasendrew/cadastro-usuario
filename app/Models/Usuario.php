<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
use Hash;

class Usuario extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'usuarios';

    public static function listar(int $limit) {
        // DB::enableQueryLog();
        
        return self::where("id", ">", 0)
        ->select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limit)
        ->get();

        // dd(DB::getQueryLog());
    }


    public static function cadastrar(Request $request) 
    {
        // DB::enableQueryLog();

        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            // "data_cadastro" => DB::raw('NOW()')
            "data_cadastro" => new Carbon()
        ]);

        // dd(DB::getQueryLog());
    } 
}
