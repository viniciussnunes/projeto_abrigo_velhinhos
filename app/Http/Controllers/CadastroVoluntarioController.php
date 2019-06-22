<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroVoluntarioController extends Controller
{
    public function cadastroVoluntario()
    {
        return view('paginas/cadastroVoluntario');
    }
}
