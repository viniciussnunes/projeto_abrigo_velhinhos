<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $retorno = Noticia::limit(6)->get()->toArray();

        // dd($retorno);

        return view('paginas/noticias', compact('retorno'));
    }
}