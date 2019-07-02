<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class SobreController extends Controller
{
    public function index()
    {
        return view('paginas/sobre');
    }
}
