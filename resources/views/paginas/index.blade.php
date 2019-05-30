@extends('template.menu_e_footer')

@section('content')
<div class="conteiner" style="width: 100%; margin: auto; background-color:black;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height:450px; width: 100%">
        <img id="homeImagemSlide1" src="{{ asset('img/promissed_neverland.png') }}" class="d-block w-100;">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide1"></h5>
          <p id="homeTextoSlide1">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item" style="height:450px; width: 100%;">
        <img id="homeImagemSlide2" src="{{ asset('img/LogoAbrigo.png') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide2">Second slide label</h5>
          <p id="homeTextoSlide2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item" style="height:450px; width: 100%;">
        <img id="homeImagemSlide3" src="{{ asset('img/overlord3.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide3">Second slide label</h5>
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
<div style="width: 88%; margin-top: 30px; margin-left: 10%">
  <div style="width: 45%; text-align: center; display: block; overflow: hidden; float: left">
    <h2>asdasdsad</h2>
    <p style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut veniam odio minima quod perspiciatis deleniti accusantium omnis voluptas quaerat quia. Eos, molestiae voluptatum amet in quas dolorum obcaecati? Quisquam, possimus.</p>
  </div>
  <div style="width: 35%; display: block; overflow: hidden; float: right">
    <img id="homeImagemContribuidores" src="{{ asset('img/overlord3.jpg') }}" style="height:160px; width: 80%;">
  </div>
</div>
@endsection