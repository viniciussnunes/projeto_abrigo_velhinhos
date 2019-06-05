@extends('template.menu_e_footer')

@section('content')
<div class="conteiner" id="divCarrossel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carrosselItem">
        <img id="homeImagemSlide1" src="{{ asset('img/FundoPreto.jpg') }}" class="d-block w-100;">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide1">First slide label</h5>
          <p id="homeTextoSlide1">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrosselItem">
        <img id="homeImagemSlide2" src="{{ asset('img/FundoVermelho.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide2">Second slide label</h5>
          <p id="homeTextoSlide2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrosselItem">
        <img id="homeImagemSlide3" src="{{ asset('img/FundoRosa.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide3">Third slide label</h5>
          <p id="homeTextoSlide3">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
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
<div id="divParceiros">
  <div id="divParceirosTexto">
    <h2>Parceiros</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut veniam odio minima quod perspiciatis deleniti accusantium omnis voluptas quaerat quia. Eos, molestiae voluptatum amet in quas dolorum obcaecati? Quisquam, possimus.</p>
  </div>
  <div id="divParceirosImagem">
    <img id="homeImagemContribuidores " src="{{ asset('img/FundoPreto.jpg') }}">
  </div>
</div>
<div class="card-deck marginbottom cardHome" >
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endsection