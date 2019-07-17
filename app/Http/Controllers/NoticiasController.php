<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $retorno = Noticia::where('id_noticia', 14)->get()->toArray();

        // dd($retorno);

        return view('paginas/noticias', compact('retorno'));
    }
}