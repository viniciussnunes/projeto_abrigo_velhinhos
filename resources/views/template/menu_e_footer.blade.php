<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.scss')}}">
    <title>Abrigo Dos Velhinhos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <button class="navbar-toggler botaoMenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item" id="nav-item-logo">
        <a class="navbar-brand" href="#"><img src="..."></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/historia">História</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/noticias">Notícias</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="/cadastroIdoso">Cadastro de Idoso</a>
          <a class="dropdown-item" href="/cadastroVoluntario">Cadastro de Voluntário</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

    @yield('content')    

<footer class="page-footer font-small bg-info pt-4 pad">
  <div class="container-fluid text-center text-md-left">
    <div class="row" style="justify-content: center">
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Contato</h5>
          <ul class="list-unstyled">
            <li>
              <a href="https://wego.here.com/directions/mix//Abrigo-dos-Velhinhos-de-Tubarao,-Rua-S%C3%A3o-Jo%C3%A3o-,-1125,-88704-100-Tubar%C3%A3o,-Brazil:e-eyJuYW1lIjoiQWJyaWdvIGRvcyBWZWxoaW5ob3MgZGUgVHViYXJhbyIsImFkZHJlc3MiOiJSdWEgU1x1MDBlM28gSm9cdTAwZTNvICwgMTEyNSwgVHViYXJcdTAwZTNvIChTYW50YSBDYXRhcmluYSkiLCJsYXRpdHVkZSI6LTI4LjQ3NDc2NjgwMDEwNiwibG9uZ2l0dWRlIjotNDkuMDMxOTgyODkyMDAyLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjIwMDU3NzE3Njk2OTA5MH0=?map=-28.47477,-49.03198,15,normal&fb_locale=pt_BR"><p class="text-light">Endereço: Rua São João , 1125 8704-100 Tubarão (Santa Catarina)</p></a>
            </li>
            <li>
              <p class="text-light">E-mail: abrigodosvelhinhostubarao@hotmail.com</p>
            </li>
            <li>
              <p class="text-light">Telefone:	(48) 3628-0351</p>
            </li>
          </ul>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Redes Sociais</h5>
        <div class="side">
          
            <a href="https://www.facebook.com/pages/Abrigo-dos-Velhinhos-de-Tubarao/200577176969090"><img class="card-img-top redsoc" src="{{ asset('img/facebook.png') }}" ></a>
          
          
           <a href="https://www.instagram.com/abrigotubarao/?hl=pt-br"><img class="card-img-top redsoc" src="{{ asset('img/instagram.png') }}"></a> 
         
         
            <img class="card-img-top redsoc" src="{{ asset('img/whatsapp.png') }}">
          
        </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3 bg-secondary text-light">© 2019 Copyright: 
    <a href="https://mdbootstrap.com/education/bootstrap/" class="text-light"> Fernando Murate®</a>
  </div>
  </div>
</footer>


<script src="jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('/js/cep.js')}}"></script>
</body>
</html>