<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class DoacoesController extends Controller
{
    public function doacoes()
    {
        
        $usuarios = Usuario::get()->toArray();

        $response = [
            'usuarios'=>$usuarios,
            'teste'=>'ola'
        ];
        return view('paginas/doacoes', $response);
    }
}