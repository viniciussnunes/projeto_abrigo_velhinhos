<!--<script src="jquery-3.4.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Abrigo Dos Velhinhos - Administração</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/sweetalert2.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  <script src="{{asset('/js/sweetalert2.min.js')}}"></script>


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
    {{-- <link rel="stylesheet" href="{{asset('/css/icomoon.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>Abrigo Dos Velhinhos</title>

</head>

<body>


<nav class="navbar navbar-expand-lg ftco_navbar bg-white sticky-top" id="ftco-navbar">
    <div class="container">
      <a href="/homer"><img class="navbar-brand" src="{{ asset('img/logo/abrigologo.png') }}"></a>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item active"><a href="/homer" style="color: white; font-weight: 600" class="nav-link">Ir para o Site</a></li>
          <li class="nav-item"><a href="/publicacaoAdm" style="color: white; font-weight: 600" class="nav-link">Criar Publicação</a></li>
          <li class="nav-item"><a href="/cadastroIdosoAdm" style="color: white; font-weight: 600" class="nav-link">Registro de Idosos</a></li>
          <li class="nav-item"><a href="/cadastroVoluntarioAdm" style="color: white; font-weight: 600" class="nav-link">Registro de Voluntários</a></li>
        </ul>
      </div>
    </div>
</nav>




  @yield('contentAdm')

</body>

</html