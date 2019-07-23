<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class PublicacaoController extends Controller
{
    public function index()
    {
        return view('paginas/publicacao');
    }

    public function store(Request $dadosForm)
    {
       
        $dados = [
            // 'id_noticia' => $dadosForm['idNoticia'],
            'titulo' => $dadosForm['pubTitulo'],
            'conteudo' => $dadosForm['pubTexto'],
        ];

        Noticia::insert($dados);

        return view('paginas/publicacao');
    }
    
}