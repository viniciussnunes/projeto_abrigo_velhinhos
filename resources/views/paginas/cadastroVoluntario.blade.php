@extends('template.menu_e_footer')

@section('js')
  <script src="{{asset('/js/jquery.mask.min.js')}}"></script>
  <script src="{{asset('/js/sweetalert2.min.js')}}"></script>
  <script src="{{asset('/js/cadastroVoluntario.js')}}"></script>
@endsection

@section('content')

<!-- IMAGEM NO TOPO DA PÁGINA -->
<div class="block-31" style="position: relative;">
  <div>
    <div class="block-30 block-30-sm item" style="background-image:url({{ url('img/voluntario2.jpg')}})" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Seja um Voluntário</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<main role="main">
<div class="site-section"> 
    <div class="container">
      <div class="row block-9">
        <div class="container" style="margin-bottom: 20px">
          <h5> Após o envio do cadastro você será chamado para uma visita no abrigo para que possa atuar como voluntário.</h5>
        </div>

        <!-- FORMULARÍO PARA CADASTRAR UM VOLUNTÁRIO NOS REGISTROS DE VOLUNTÁRIOS-->
        <div class="col-md-12 pr-md-5">
          <form action="/cadastroVoluntario/store" method="get" id="formCadVoluntario">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="nome">Nome Completo <span class="requerido">*</span></label>
                <input id="nome" type="text" class="form-control" maxlength="50" name="nome">
              </div>
              <div class="form-group col-md-3">
                <label for="email">E-mail</label>
                <input id="email" type="email" class="form-control" name="email">
              </div>
              <div class="form-group col-md-2">
                <label for="telCel">Celular<span class="requerido">*</span></label>
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
              <div class="form-group col-md-6">
                <label for="habilidades">Habilidades</label>
                <textarea id="habilidades" rows="4" cols="50" class="form-control" name="habilidades" form="formCadVoluntario" placeholder="Descreva..."></textarea>
              </div>  
            </div>
            
            <button type="button" id="btn-cadstrar" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-danger" style="color:white" onclick="window.location='/home'">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection