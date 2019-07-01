<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('paginas/noticias');
    }
}