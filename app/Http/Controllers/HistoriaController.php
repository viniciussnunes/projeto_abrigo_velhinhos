<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class HistoriaController extends Controller
{
    public function historia()
    {
        
        $usuarios = Usuario::get()->toArray();

        $response = [
            'usuarios'=>$usuarios,
            'teste'=>'ola'
        ];
        return view('paginas/historia', $response);
    }
}
