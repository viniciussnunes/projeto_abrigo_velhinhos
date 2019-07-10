<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pessoa;

class CadastroIdosoController extends Controller
{
    public function index()
    {
        return view('paginas/cadastroIdoso');
    }
    
    public function store(Request $dadosForm)
    {
        ##essa é a forma de ver o conteúdo de uma variável no laravel, tbm pode usar var_dump, basta descomentar e verá no navegador o array com os dados do form
        dd($dadosForm->all()); 
        if (empty($dadosForm['idnome'])) {
            return view('paginas/cadastroIdoso');
        }
        
        // dd($dadosForm->all()); 
        ##array para inserção de dados, basta colocar o nome do campo d atabela a esquerda e o valor do array do form à direita
        ##Link para consulta da documentação do laravel sobre query: https://laravel.com/docs/5.8/queries
        $dados = [
            'nome' => $dadosForm['nomeIdoso'],
            'nome' => $dadosForm['dataNascIdoso'],
            'nome' => $dadosForm['seAposentado'],
            'nome' => $dadosForm['doenca'],
            'nome' => $dadosForm['alimentacao'],
            'nome' => $dadosForm['medicacao'],
            'nome' => $dadosForm['alergia'],
            'nome' => $dadosForm['observacao'],
            'nome' => $dadosForm['nomeResponsavel'],
            'nome' => $dadosForm['dataNascResposnavel'],
            'nome' => $dadosForm['telFixo'],
            'nome' => $dadosForm['telCel'],
            'nome' => $dadosForm['whatsapp'],
            'nome' => $dadosForm['email'],
            'nome' => $dadosForm['parentesco'],
            'nome' => $dadosForm['cidade'],
        ];

        // Pessoa::insert($dados);

        ##Para fazer uma consulta na tabela pessoa:

        $retornoConsulta = Pessoa::get()->toArray();
        // dd($retornoConsulta);

       //pega o registro do banco
        // $usuario = Pessoa::where('id_pessoa',1)->pluck('nome');
        // dd($usuario); 


        return view('paginas/index');
    }






}
