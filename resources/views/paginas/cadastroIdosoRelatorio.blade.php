@extends('template.menuAdm')

@section('contentAdm')

<div class="container tabela text-center" style="margin-top: 40px">
    <h1>Registro de Idosos</h1>
    <h6>Esses são os registros de todas as pessoas que desejam morar no abrigo</h6>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Aposentado</th>
      <th scope="col">Nome do Responsável</th>
      <th scope="col">Doenças</th>
      <th scope="col">Alimentação</th>
      <th scope="col">Medicção</th>
      <th scope="col">Alergia</th>
      <th scope="col">Observações</th>
      <th scope="col">Nome responsável</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Tel fixo</th>
      <th scope="col">Celular</th>
      <th scope="col">Whatsapp</th>
      <th scope="col">E-mail</th>
      <th scope="col">Parentesco</th>
      <th scope="col">Cidade</th>
    </tr>
  </thead>
  <tbody>
    @foreach($idosos as $idoso)
      <tr>
        <th scope="row">{{$idoso['id_cadastro']}}</th>
        <td class="borda" >{{$idoso['nome_idoso']}}</td >
        <td class="borda" >{{$idoso['nascimento_idoso']}}</td >
        <td class="borda" >{{$idoso['aposentado']}}</td >
        <td class="borda" >{{$idoso['nome_responsavel']}}</td >
        <td class="borda" >{{$idoso['doenca']}}</td >
        <td class="borda" >{{$idoso['alimentacao']}}</td >
        <td class="borda" >{{$idoso['medicacao']}}</td >
        <td class="borda" >{{$idoso['alergia']}}</td >
        <td class="borda" >{{$idoso['obs']}}</td >
        <td class="borda" >{{$idoso['nome_responsavel']}}</td >
        <td class="borda" >{{$idoso['nascimento_responsavel']}}</td >
        <td class="borda" >{{$idoso['tel_fixo']}}</td >
        <td class="borda" >{{$idoso['tel_cel']}}</td >
        <td class="borda" >{{$idoso['whatsapp']}}</td >
        <td class="borda" >{{$idoso['email']}}</td >
        <td class="borda" >{{$idoso['parentesco']}}</td >
        <td class="borda" >{{$idoso['cidade']}}</td >
      </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection