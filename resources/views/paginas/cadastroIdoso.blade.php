@extends('template.menu_e_footer')

@section('js')
  <script src="{{asset('/js/cadastroIdoso.js')}}"></script>
  {{-- <script src="{{asset('/js/cep.js')}}"></script> --}}
  <script src="{{asset('/js/jquery.mask.min.js')}}"></script>
  <script src="{{asset('/js/sweetalert2.min.js')}}"></script>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('/css/cadastroIdoso.css')}}">
@endsection

@section('content')

  <h2>Cadastre um Idoso</h2>

  <form action="/cadastroIdoso/store" method="get" id="formCadIdoso">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="idnome">Nome Completo</label>
        <input id="nomeIdoso" type="text" class="form-control" name="idnome" required>
      </div>
      <div class="form-group col-md-3">
        <label for="idnasci">Data de Nascimento</label>
        <input id="dataNasc" type="text" class="form-control data" name="idnasci" placeholder="DD/MM/AAAA">
      </div>
      <div class="form-group col-md-3">
        <label for="idaposentado">Aposentado</label>
        <select id="seAposentado" class="form-control" name="idaposentado">
          <option value="" hidden>Selecione...</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>
      </div>
      {{-- <div class="form-group col-md-3">
        <label for="tipoSangue">Tipo Sanguíneo</label>
        <select id="tipoSanguineo" class="form-control" name="tipoSangue">
          <option>Selecione...</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
      </div> --}}
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="iddoenca">Doenças crônicas?</label>
        <textarea rows="4" cols="50" class="form-control" name="iddoenca" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="idalimentacao">Restrições sobre alimentação?</label>
        <textarea rows="4" cols="50" class="form-control" name="idalimentacao" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="idmedicacao">Utiliza medicação?</label>
        <textarea rows="4" cols="50" class="form-control" name="idmedicacao" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="idalergia">Possui alergia?</label>
        <textarea rows="4" cols="50" class="form-control" name="idalergia" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="idobsgeral">Outras observações</label>
        <textarea rows="4" cols="50" class="form-control" name="idobsgeral" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>  
    </div>     
    <h3>Responsável pelo Idoso</h3>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="resnome">Nome Completo</label>
        <input type="text" class="form-control" name="resnome">
      </div>
      <div class="form-group col-md-2">
        <label for="resdate">Data de Nascimento</label>
        <input type="text" class="form-control data" name="resdate" placeholder="DD/MM/AAAA">
      </div>
      <div class="form-group col-md-2">
        <label for="restelefone">Telefone fixo</label>
        <input type="text" class="form-control ddd_tel" name="restelefone" placeholder="(__) ____-____">
      </div>
      <div class="form-group col-md-2">
        <label for="restelefone">Celular</label>
        <input type="text" class="form-control ddd_cel" name="restelefone" placeholder="(__) _.____-____">
      </div>
      <div class="form-group col-md-2">
        <label id="zapLabel">Whatsapp</label>
        {{-- <div class="form-check">
          <input class="form-check-input" type="checkbox" value="sim" id="whatsapp">
        </div> --}}
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="whatsapp" id="zapSim" value="sim">
          <label class="form-check-label" for="exampleRadios1">
            Sim
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="whatsapp" id="zapNao" value="nao" checked>
          <label class="form-check-label" for="exampleRadios2">
            Não
          </label>
        </div>
      </div>  
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="resemail">E-mail</label>
        <input type="email" class="form-control" name="resemail">
      </div>
      <div class="form-group col-md-2">
        <label for="resparente">Grau de Parentesco</label>
        <input type="text" class="form-control" name="resparente">
      </div>
      <div class="form-group col-md-3">
        <label for="rescidade">Cidade</label>
        <input type="text" class="form-control" name="rescidade" id="rescidade">
      </div>
    </div>
    
    {{-- <div class="form-group col-md-2">
      <label for="rescep">CEP</label>
      <input type="text" class="form-control cep" name="rescep" onblur="pesquisacep(this.value);">
    </div> --}}
    {{-- <div class="form-row">
      <div class="form-group col-md-1">
        <label for="resnumero">Número</label>
        <input type="number" class="form-control" name="resnumero" placeholder="Número">
      </div>
      <div class="form-group col-md-6">
        <label for="resrua">Rua</label>
        <input type="text" class="form-control" name="resrua" id="resrua">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="resbairro">Bairro</label>
        <input type="text" class="form-control" name="resbairro" id="resbairro">
      </div>

    </div> --}}

    <button type="submit" id="botaoIdoso" class="btn btn-primary">Cadastrar</button>
    <button type="button" class="btn btn-danger" onclick="window.location='/home'">Cancelar</button>
    <button type="button" id="testeSwall" class="btn btn-primary">Swall</button>
    
  </form>


  @endsection
