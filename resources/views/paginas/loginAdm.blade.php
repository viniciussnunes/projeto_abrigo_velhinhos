@extends('template.login')

@section('contentLogin')

<div class="container" style="width: 350px">
<div class="text-center login-card" style="display: initial">
  <form class="form-signin" action="/publicacaoAdm" style=" padding-top:60px">
    <img class="mb-4" src="{{asset('img/logo/abrigologo2.png')}}" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login Administrador</h1>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus="">

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password">

    <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #68c7e8">Entrar</button>
    <a class="btn btn-lg btn-secondary btn-block" href="/homer" style="background-color: #212529">Voltar para o Site</a>
  </form>
</div>
</div>

@endsection