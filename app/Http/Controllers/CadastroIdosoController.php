<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cadastro;

class CadastroIdosoController extends Controller
{
    public function index()
    {
        return view('paginas/cadastroIdoso');
    }
    
    public function store(Request $dadosForm)
    {
       
        $dados = [
            'nome_idoso' => $dadosForm['nomeIdoso'],
            'nascimento_idoso' => $dadosForm['dataNascIdoso'],
            'aposentado' => $dadosForm['seAposentado'],
            'doenca' => $dadosForm['doenca'],
            'alimetacao' => $dadosForm['alimentacao'],
            'medicacao' => $dadosForm['medicacao'],
            'alergia' => $dadosForm['alergia'],
            'obs' => $dadosForm['observacao'],
            'nome_responsavel' => $dadosForm['nomeResponsavel'],
            'nascimento_responsavel' => $dadosForm['dataNascResposnavel'],
            'tel_fixo' => $dadosForm['telFixo'],
            'tel_cel' => $dadosForm['telCel'],
            'whatsapp' => $dadosForm['whatsapp'],
            'email' => $dadosForm['email'],
            'parentesco' => $dadosForm['parentesco'],
            'cidade' => $dadosForm['cidade'],
        ];

        Cadastro::insert($dados);

        return view('paginas/index');
    }






}
