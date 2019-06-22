<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class DoacoesController extends Controller
{
    public function doacoes()
    {
        return view('paginas/doacoes');
    }
}