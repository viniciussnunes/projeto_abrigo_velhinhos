<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class NoticiasController extends Controller
{
    public function noticias()
    {
        return view('paginas/noticias');
    }
}