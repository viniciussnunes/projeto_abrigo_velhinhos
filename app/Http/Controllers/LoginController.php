<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    public function index()
    {

        return view('paginas/login');

    }

    public function validar(Request $dadosForm)
    {
        if (empty($dadosForm['cpf'])) {
            $mensagemCpf = 'O campo CPF é obrigatório';
        } else {
            $cpfValidado = Login::where('cpf',$dadosForm['cpf'])->exists();
            if ($cpfValidado) {
                $mensagemCpf = null;
            } else { $mensagemCpf = 'CPF não encontrado'; }
        }

        if (empty($dadosForm['senha'])) {
            $mensagemSenha = 'O campo SENHA é obrigatório';
        } else { 
            $senhaValidada = Login::where('senha',$dadosForm['senha'])->exists();
            if ($senhaValidada) {
                $mensagemSenha = null;
            } else {$mensagemSenha = 'Senha incorreta'; }
        }

        $validado = false;
        if (!empty($dadosForm['senha']) && !empty($dadosForm['cpf'])) {
            $validado = Login::where('senha',$dadosForm['senha'])->where('cpf',$dadosForm['cpf'])->exists();
        } 

        $retorno = [
            'validado' => $validado,
            'mensagemCpf' => $mensagemCpf,
            'mensagemSenha' => $mensagemSenha,
        ];

        if ($validado) {
            return view('paginas/publicacao');
        } else {
            return view('paginas/login', compact('retorno'));
        }

      
    }
}
