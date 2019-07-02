@extends('template.menu_e_footer')

@section('content')
<!-- Carrossel -->
<div class="conteiner" id="divCarrossel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carrossel-item">
        <img id="home-imagem-slide1" class="img-carrossel" src="{{ asset('img/FundoPreto.jpg') }}" class="d-block w-100;">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="home-titulo-slide1">First slide label</h5>
          <p id="home-texto-slide1">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrossel-item">
        <img id="home-imagem-slide2" class="img-carrossel" src="{{ asset('img/FundoVermelho.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="home-titulo-clide2">Second slide label</h5>
          <p id="home-texto-clide2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrossel-item">
        <img id="home-imagem-slide3" class="img-carrossel" src="{{ asset('img/FundoRosa.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="home-titulo-slide3">Third slide label</h5>
          <p id="home-texto-slide3">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div> 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- CARD -->
<div class="card-deck card-home" >
  <div class="card">
  <a href="/noticias"><img class="card-img-top" src="{{ asset('img/FundoPreto.jpg') }}" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title">Fique atualizado!</h5>
      <p class="card-text">Fique por dentro de tudo que está acontecendo no Abrigo.</p>
    </div>
  </div>
  <div class="card">
  <a href="/doacoes"><img class="card-img-top" src="{{ asset('img/FundoVermelho.jpg') }}" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-titleA">Doe!</h5>
      <p class="card-text"> Ajude-nos financeiramente para que possamos manter nossas atividades.</p>
    </div>
  </div>
  <div class="card">
  <a href="/cadastroVoluntario"><img class="card-img-top" src="{{ asset('img/FundoRosa.jpg') }}" alt="Card image cap"></a>
    <div class="card-body">
      <h5 class="card-title">Seja um voluntário!</h5>
      <p class="card-text">Estamos sempre precisando de pessoas para nos ajudar.</p>    
    </div>
  </div>
</div>

<!-- Parceiros -->
<div class="container-fluid">
  <h1 class="titulo-colaboradores"> Colaboradores </h1>
</div>
  <div>
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item item-menu li-colaboradores" id="nav-item-logo">
          <img class="logo logo-colaboradores" src="{{ asset('img/logo/abrigologo.png') }}">
          <img class="logo logo-colaboradores" src="{{ asset('img/logo/abrigologo.png') }}">
          <img class="logo logo-colaboradores" src="{{ asset('img/logo/abrigologo.png') }}">
          <img class="logo logo-colaboradores" src="{{ asset('img/logo/abrigologo.png') }}">
          <img class="logo logo-colaboradores" src="{{ asset('img/logo/abrigologo.png') }}">
        </li>
      </ul>
  <div>



@endsection