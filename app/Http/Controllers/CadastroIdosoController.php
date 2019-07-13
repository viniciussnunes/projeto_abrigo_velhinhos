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
        ##essa é a forma de ver o conteúdo de uma variável no laravel, tbm pode usar var_dump, basta descomentar e verá no navegador o array com os dados do form
        // dd($dadosForm->all()); 
        if (empty($dadosForm['nomeIdoso'])) {
            return view('paginas/cadastroIdoso');
        }
        
         //dd($dadosForm->all()); 
        ##array para inserção de dados, basta colocar o nome do campo d atabela a esquerda e o valor do array do form à direita
        ##Link para consulta da documentação do laravel sobre query: https://laravel.com/docs/5.8/queries
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

        ##Para fazer uma consulta na tabela pessoa:

        $retornoConsulta = Cadastro::get()->toArray();
        // dd($retornoConsulta);

       //pega o registro do banco
        // $usuario = Pessoa::where('id_pessoa',1)->pluck('nome');
        // dd($usuario); 


        return view('paginas/index',$retornoConsulta );
    }






}
