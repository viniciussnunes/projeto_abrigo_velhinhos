@extends('template.menuAdm')

@section('contentAdm')

<div class="container tabela text-center" >
    <h1>Registro de Idosos</h1>
    <h6>Esses são os registros de todas as pessoas que desejam morar no abrigo</h6>
<table class="table table-dark tabela" style="border-radius:10px">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Aposentado</th>
      <th scope="col">Nome do Responsável/th>
      <th scope="col">Tipo Sanguineo</th>
      <th scope="col">Doenças crônicas</th>
      <th scope="col">Alimentação</th>
      <th scope="col">Medicação</th>
      <th scope="col">Alergia</th>
      <th scope="col">Observções em Gerais</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     <td style="border: 1px solid gray">Gustavo Pacheco Gonzaga</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">10/07/2001</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">N</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">AB+</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sim, ele possui um problema cardíaco</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Ele come de tudo, só não gosta quando não tem comida</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Toma dois remedios pela manhã e mais um de noite</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Possui leve alergia a picada de mosquito</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sempre deixe comida disponivel, principalmente durante a noite</td style="border: 1px solid gray"> 
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="border: 1px solid gray">Gustavo Pacheco Gonzaga</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">10/07/2001</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">N</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">AB+</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sim, ele possui um problema cardíaco</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Ele come de tudo, só não gosta quando não tem comida</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Toma dois remedios pela manhã e mais um de noite</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Possui leve alergia a picada de mosquito</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sempre deixe comida disponivel, principalmente durante a noite</td style="border: 1px solid gray">
    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="border: 1px solid gray">Gustavo Pacheco Gonzaga</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">10/07/2001</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">N</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">AB+</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sim, ele possui um problema cardíaco</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Ele come de tudo, só não gosta quando não tem comida</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Toma dois remedios pela manhã e mais um de noite</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Possui leve alergia a picada de mosquito</td style="border: 1px solid gray">
      <td style="border: 1px solid gray">Sempre deixe comida disponivel, principalmente durante a noite</td style="border: 1px solid gray">
    </tr>
  </tbody>
</table>
</div>

@endsection