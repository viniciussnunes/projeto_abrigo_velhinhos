<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class HomeController extends Controller
{
    public function index()
    {

        $retorno = Noticia::get()->toArray();

        // dd($retorno);

        return view('paginas/index', compact('retorno'));
    }
}