@extends('template.menuAdm')

@section('contentAdm')

<div class="container tabela text-center">
    <h1>Registro de Voluntários</h1>
    <h6>Esses são os registros de todas as pessoas que desejam se voluntariar</h6>
<table class="table table-dark tabela " style="border-radius:10px">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome Completo</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Função</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gilberto Robinhison</td>
      <td>Otto@gmail</td>
      <td>994762245</td>
      <td>Faz nada</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob Cleitinho</td>
      <td>Thornton@gmail</td>
      <td>994762245</td>
      <td>Faz nada</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry List</td>
      <td>the Bird@gmail</td>
      <td>994762245</td>
      <td>Faz nada</td>
    </tr>
  </tbody>
</table>
</div>

@endsection