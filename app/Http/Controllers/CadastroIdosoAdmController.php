<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroIdosoAdmController extends Controller
{
    public function index()
    {
        return view('paginas/cadastroIdosoAdm');
    }
    
}