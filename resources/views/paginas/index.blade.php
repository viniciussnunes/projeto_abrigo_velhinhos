@extends('template.menu_e_footer')

@section('content')
<div class="conteiner" style="width: 100%; margin: auto; margin-top: 10px; background-color:black;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height:450px; width: 100%">
        <img src="{{ asset('img/promissed_neverland.png') }}" class="d-block w-100;" alt="...">
      </div>
      <div class="carousel-item" style="height:450px; width: 100%;">
        <img src="{{ asset('img/LogoAbrigo.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" style="height:450px; width: 100%;">
        <img src="{{ asset('img/overlord3.jpg') }}" class="d-block w-100" alt="...">
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
<div style="margin: auto; width: 88%; margin-top: 10px">
  <div style="width: 45%; text-align: center; display: block; overflow: hidden; float: left">
    <h2>asdasdsad</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti saepe illum. Hic placeat corporis et cupiditate?</p>
  </div>
  <div style="width: 35%; margin-left: 5%; display: block; overflow: hidden; float: right">
    <img style="height:160px; width: 80%;" src="{{ asset('img/overlord3.jpg') }}" alt="...">
  </div>
</div>
@endsection