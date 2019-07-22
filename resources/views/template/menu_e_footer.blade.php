<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/css/jquery.timepicker.css')}}">
  <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/template.css')}}">
  <link rel="stylesheet" href="{{asset('/css/sweetalert2.min.css')}}">

  <title>Abrigo Dos Velhinhos</title>

</head>
{{-- <h1>{{$retornoConsulta[0]['nomeIdoso']}}</h1> --}}
<body>

<!--CLASSE PARA DEIXAR MENU FIXO - sticky-top -->
  <nav class="navbar navbar-expand-lg ftco_navbar sticky-top" id="ftco-navbar" style="background-color: rgb(64, 64, 64)">
    <div class="container">
      <a href="/home"><img class="navbar-brand" style="float: left" src="{{ asset('img/logo/abrigologo.png') }}">
        <div style= "float: left;">
          <p class="p-logo" style=" margin-bottom: -10px; margin-top: 10px;">ABRIGO</p> 
          <p class="p-logo" style=" margin-bottom: 0;" >DOS VELHINHOS</p>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        Menu 
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/home" style="color: rgb(121, 204, 171); font-weight: 400; font-size: 20px" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/noticias" style="color: white; font-weight: 400; font-size: 20px" class="nav-link">Notícias</a></li>
          <li class="nav-item"><a href="/cadastroVoluntario" style="color: white; font-weight: 400; font-size: 20px" class="nav-link">Voluntários</a></li>
          <li class="nav-item"><a href="/cadastroIdoso" style="color: white; font-weight: 400; font-size: 20px" class="nav-link">Vagas</a></li>
          <li class="nav-item"><a href="/sobre" style="color: white; font-weight: 400; font-size: 20px" class="nav-link">Sobre</a></li>

        </ul>
      </div>
    </div>
  </nav>


  @yield('content')

  <footer class="footer">
    <div class="container">

      <!-- Sobre e botão para ser voluntário -->
      <div class="row mb-5">
        <div class="col-md-6 col-lg-6 text-center">
          <h3 class="heading-section">Sobre o Abrigo</h3>
          <p class="mb-5">O Abrigo dos Velhinhos de Tubarão, Santa Catarina, atua há anos cuidando dos idosos da região. Seu principal intuito é oferecer um local que possua os cuidados necessários para os mesmos.</p>
          <p><a href="/cadastroVoluntario" class="btn btn-primary px-4 py-3">Seja um Voluntário</a></p>
        </div>

        <!-- Contatos -->
        <div class="col-md-6 col-lg-6 text-center">
          <div class="block-23 text-center">
            <h3 class="heading-section">Contatos</h3>
            <ul>
              <li><a href="https://wego.here.com/directions/mix//Abrigo-dos-Velhinhos-de-Tubarao,-Rua-S%C3%A3o-Jo%C3%A3o-,-1125,-88704-100-Tubar%C3%A3o,-Brazil:e-eyJuYW1lIjoiQWJyaWdvIGRvcyBWZWxoaW5ob3MgZGUgVHViYXJhbyIsImFkZHJlc3MiOiJSdWEgU1x1MDBlM28gSm9cdTAwZTNvICwgMTEyNSwgVHViYXJcdTAwZTNvIChTYW50YSBDYXRhcmluYSkiLCJsYXRpdHVkZSI6LTI4LjQ3NDc2NjgwMDEwNiwibG9uZ2l0dWRlIjotNDkuMDMxOTgyODkyMDAyLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjIwMDU3NzE3Njk2OTA5MH0=?map=-28.47477,-49.03198,15,normal&fb_locale=pt_BR"><img width="20px" style="margin-right: 20px" src="{{ asset('img/localizacao.png') }}"><span class="text">Rua São João, 1125 8704-100 Tubarão (Santa Catarina)</span></a></li>
              <li><a href="#"><img width="20px" style="margin-right: 20px" src="{{ asset('img/telefone.png') }}"><span class="text">+2 392 3929 210</span></a></li>
              <li><a href="https://www.instagram.com/abrigotubarao/?hl=pt-br"><img width="30px" style="margin-right: 15px" src="{{ asset('img/instagram.png') }}"><span class="text ">@abrigotubarao</span></a></li>
              <li><a href="https://www.facebook.com/pages/Abrigo-dos-Velhinhos-de-Tubarao/200577176969090"><img width="20px" style="margin-right: 20px" src="{{ asset('img/facebook.png') }}"></span><span class="text">Abrigo dos Velhinhos Tubarão</span></a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <!-- <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p> -->
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> -->
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      <!-- </p>
        </div>
      </div>
    </div> -->
  </footer>

</body>
{{-- <script src="jquery-3.4.0.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/main.js"></script>
@yield('js')

</html>