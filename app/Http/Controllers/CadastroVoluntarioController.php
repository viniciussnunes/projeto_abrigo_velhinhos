<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voluntario;


class CadastroVoluntarioController extends Controller
{
    public function index()
    {

        return view('paginas/cadastroVoluntario');

    }

    public function store(Request $dadosForm)
    {
        // dd("a");

         $dados = [
            'nome' => $dadosForm['nome'],
            'tel_cel' => $dadosForm['telCel'],
            'whatsapp' => $dadosForm['whatsapp'],
            'email' => $dadosForm['email'],
            'habilidades' => $dadosForm['habilidades']
        ];

        Voluntario::insert($dados);

        return view('paginas/index');
    }

    public function relatorio()
    {
        $voluntarios = Voluntario::get()->toArray();

        return view('paginas/cadastroVoluntarioRelatorio', compact('voluntarios'));
    }
    
}
