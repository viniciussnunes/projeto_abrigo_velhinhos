<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastrosController extends Controller
{
    public function cadastros()
    {
        
        $usuarios = Usuario::get()->toArray();

        $response = [
            'usuarios'=>$usuarios,
            'teste'=>'ola'
        ];
        return view('paginas/cadastros', $response);
    }
}
