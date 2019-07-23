@extends('template.login')

@section('contentLogin')

<div class="container col-md-3">
<div class="text-center login-card col-" style="display: initial">
  <form class="form-signin" id="divLogin" action="/login/validar" style=" padding-top:60px">
    <img class="mb-4" src="{{asset('img/logo/abrigologo2.png')}}" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login Administrador</h1>
    @if (!empty($retorno['mensagemCpf']))
      <div class="alert alert-danger" role="alert">
        {{($retorno['mensagemCpf'])}}
      </div>
    @endif
    <input type="text" id="inputCpf" class="form-control cpf" placeholder="CPF" autofocus="" name="cpf">
    @if (!empty($retorno['mensagemSenha']))
      <div class="alert alert-danger" role="alert">
        {{$retorno['mensagemSenha']}}
      </div>
    @endif
    <input type="password" id="inputSenha" class="form-control" placeholder="Senha" name="senha">
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: rgb(121, 204, 171)">Entrar</button>
    <a class="btn btn-lg btn-secondary btn-block" href="/home" style="background-color: rgb(64, 64, 64)">Voltar para o Site</a>
  </form>
</div>
</div>

@endsection