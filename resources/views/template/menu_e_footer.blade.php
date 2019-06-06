<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
      <li class="nav-item">
        <a class="nav-link" href="/cadastros">Cadastros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/doacoes">Doações</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    @yield('content')    

<footer class="page-footer font-small bg-info pt-4 pad">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">Lorem Ipsum</h5>
        <p  class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Vestibulum ultrices luctus metus.</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">consectetur</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-light">Ipsum</a>
            </li>
            <li>
              <a href="#!" class="text-light">Interdum</a>
            </li>
            <li>
              <a href="#!" class="text-light">Vestibulum</a>
            </li>
            <li>
              <a href="#!" class="text-light">Roncus</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Sodales</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-light">Tempus </a>
            </li>
            <li>
              <a href="#!" class="text-light">Commodo</a>
            </li>
          </ul>
        </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3 bg-secondary text-light">© 2019 Copyright: 
    <a href="https://mdbootstrap.com/education/bootstrap/" class="text-light"> Fernando Murate®</a>
  </div>
</footer>


<script src="jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>