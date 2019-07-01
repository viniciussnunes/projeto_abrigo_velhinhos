<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class LoginAdmController extends Controller
{
    public function index()
    {
        return view('paginas/loginAdm');
    }
}
