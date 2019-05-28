<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class HomeController extends Controller
{
    public function index()
    {
        
        $usuarios = Usuario::get()->toArray();

        $response = [
            'usuarios'=>$usuarios,
            'teste'=>'ola'
        ];
        return view('pessoas/index', $response);
    }
}
