@extends('template.login')

@section('contentLogin')

<form class="container align-content-center formLogin-adm" action="/publicacaoAdm">
  <div>
    <h1 class="text-center" style="margin-bottom: 40px">Login Administrador</h1>
  </div>    
  <div>
    <div class="form-group">
      <label for="exampleInputEmail1">E-mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu E-mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Senha">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a class="btn btn-secondary" href="/home">Voltar para o Site</a>
  </div>
</form>

@endsection