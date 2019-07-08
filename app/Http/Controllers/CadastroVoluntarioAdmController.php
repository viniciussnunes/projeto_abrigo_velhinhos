<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroVoluntarioAdmController extends Controller
{
    public function index()
    {
        return view('paginas/cadastroVoluntarioAdm');
    }
    
}