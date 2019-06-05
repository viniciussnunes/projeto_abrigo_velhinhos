<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class NoticiasController extends Controller
{
    public function noticias()
    {
        
        $usuarios = Usuario::get()->toArray();

        $response = [
            'usuarios'=>$usuarios,
            'teste'=>'ola'
        ];
        return view('paginas/noticias', $response);
    }
}