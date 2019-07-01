<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class CadastroIdosoController extends Controller
{
    public function index()
    {
        return view('paginas/cadastroIdoso');
    }
    
    public function cadastrar()
    {

        $dados = Request::post();
        // dd($dados);
        return view('paginas/cadastroIdoso');
    }






}
