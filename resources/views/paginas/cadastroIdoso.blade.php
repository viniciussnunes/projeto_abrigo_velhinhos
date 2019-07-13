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

<div class="container">
  <h2>Cadastro</h2>
  <h5>Caso deseje vaga para um idoso, favor preencher o cadastro abaixo que entraremos em contato assim que possível.</h4>
  
  <h3 class="tituloDados">Dados do idoso</h3>

  <form action="/cadastroIdoso/store" method="get" id="formCadIdoso">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="nomeIdoso">Nome Completo <span class="requerido">*</span></label>
        <input id="nomeIdoso" type="text" class="form-control" name="nomeIdoso">
      </div>
      <div class="form-group col-md-3">
        <label for="dataNascIdoso">Data de Nascimento</label>
        <input id="dataNascIdoso" type="text" class="form-control data" name="dataNascIdoso" placeholder="DD/MM/AAAA">
      </div>
      <div class="form-group col-md-3">
        <label for="seAposentado">Aposentado <span class="requerido">*</span></label>
        <select id="seAposentado" class="form-control" name="seAposentado">
          <option value="" hidden>Selecione...</option>
          <option value="1">Sim</option>
          <option value="0">Não</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="doenca">Doenças crônicas?</label>
        <textarea id="doenca" rows="4" cols="50" class="form-control" name="doenca" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="alimentacao">Restrições sobre alimentação?</label>
        <textarea id="alimentacao" rows="4" cols="50" class="form-control" name="alimentacao" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="medicacao">Utiliza medicação?</label>
        <textarea id="medicacao" rows="4" cols="50" class="form-control" name="medicacao" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="alergia">Possui alergia?</label>
        <textarea id="alergia" rows="4" cols="50" class="form-control" name="alergia" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="observacao">Outras observações</label>
        <textarea id="observacao" rows="4" cols="50" class="form-control" name="observacao" form="formCadIdoso" placeholder="Descreva..."></textarea>
      </div>  
    </div> 

    <h3 class="tituloDados">Responsável pelo Idoso</h3>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="nomeResponsavel">Nome Completo <span class="requerido">*</span></label>
        <input id="nomeResponsavel" type="text" class="form-control" name="nomeResponsavel">
      </div>
      <div class="form-group col-md-2">
        <label for="dataNascResposnavel">Data de Nascimento</label>
        <input id="dataNascResposnavel" type="text" class="form-control data" name="dataNascResposnavel" placeholder="DD/MM/AAAA">
      </div>
      <div class="form-group col-md-2">
        <label for="telFixo">Telefone fixo</label>
        <input id="telFixo" type="text" class="form-control ddd_tel" name="telFixo" placeholder="(__) ____-____">
      </div>
      <div class="form-group col-md-2">
        <label for="telCel">Celular <span class="requerido">*</span></label>
        <input id="telCel" type="text" class="form-control ddd_cel" name="telCel" placeholder="(__) _.____-____">
      </div>
      <div class="form-group col-md-2">
        <label id="zapLabel">Whatsapp</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="whatsapp" id="zapSim" value="1">
          <label class="form-check-label" for="exampleRadios1">
            Sim
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="whatsapp" id="zapNao" value="0" checked>
          <label class="form-check-label" for="exampleRadios2">
            Não
          </label>
        </div>
      </div>  
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="email">E-mail</label>
        <input id="email" type="email" class="form-control" name="email">
      </div>
      <div class="form-group col-md-2">
        <label for="parentesco">Grau de Parentesco <span class="requerido">*</span></label>
        <input id="parentesco" type="text" class="form-control" name="parentesco">
      </div>
      <div class="form-group col-md-3">
        <label for="cidade">Cidade <span class="requerido">*</span></label>
        <input id="cidade" type="text" class="form-control" name="cidade">
      </div>
    </div>
    
    <button type="button" id="btn-cadstrar" class="btn btn-primary">Cadastrar</button>
    <button type="button" class="btn btn-danger" onclick="window.location='/home'">Cancelar</button>
    
  </form>

</div>

@endsection
