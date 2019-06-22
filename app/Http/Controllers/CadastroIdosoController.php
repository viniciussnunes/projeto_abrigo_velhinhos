<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroIdosoController extends Controller
{
    public function cadastroIdoso()
    {
        return view('paginas/cadastroIdoso');
    }
}
