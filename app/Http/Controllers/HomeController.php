<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class HomeController extends Controller
{
    public function index()
    {
        return view('paginas/index');
    }
}
