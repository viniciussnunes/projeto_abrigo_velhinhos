@extends('template.menu_e_footer')

@section('content')

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
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
        <div class="col-md-12 pr-md-5">
          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Nome Completo</label>
                <input type="text" class="form-control" name="volnome" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress">E-mail</label>
                <input type="text" class="form-control" name="volemail" placeholder="E-mail">
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Telefone</label>
                <input type="text" class="form-control" name="voltelefone" placeholder="Telefone">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputEmail4">Função</label>
                  <input type="text" class="form-control" name="volfuncao" placeholder="Função">
              </div>
            </div>  
              <div class="form-group">
                <input type="submit" value="Enviar Cadastro" class="btn btn-primary py-3 px-5">
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection