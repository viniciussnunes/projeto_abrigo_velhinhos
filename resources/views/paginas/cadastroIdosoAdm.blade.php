@extends('template.menuAdm')

@section('contentAdm')

<div class="container tabela text-center" style="margin-top: 40px">
    <h1>Registro de Idosos</h1>
    <h6>Esses são os registros de todas as pessoas que desejam morar no abrigo</h6>
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome Completo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Aposentado</th>
      <th scope="col">Nome do Responsável</th>
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
     <td class="borda" >Gustavo Pacheco Gonzaga</td >
      <td class="borda" >10/07/2001</td >
      <td class="borda" >N</td >
      <td class="borda" >Josevaldo</td >
      <td class="borda" >AB+</td >
      <td class="borda" >Sim, ele possui um problema cardíaco</td >
      <td class="borda" >Ele come de tudo, só não gosta quando não tem comida</td >
      <td class="borda" >Toma dois remedios pela manhã e mais um de noite</td >
      <td class="borda" >Possui leve alergia a picada de mosquito</td >
      <td class="borda" >Sempre deixe comida disponivel, principalmente durante a noite</td > 
    </tr>
    <tr>
      <th scope="row">2</th>
      <td class="borda" >Gustavo Pacheco Gonzaga</td >
      <td class="borda" >10/07/2001</td >
      <td class="borda" >N</td >
      <td class="borda" >Josevaldo</td >
      <td class="borda" >AB+</td >
      <td class="borda" >Sim, ele possui um problema cardíaco</td >
      <td class="borda" >Ele come de tudo, só não gosta quando não tem comida</td >
      <td class="borda" >Toma dois remedios pela manhã e mais um de noite</td >
      <td class="borda" >Possui leve alergia a picada de mosquito</td >
      <td class="borda" >Sempre deixe comida disponivel, principalmente durante a noite</td >
    </tr>
    <tr>
      <th scope="row">3</th>
      <td class="borda" >Gustavo Pacheco Gonzaga</td >
      <td class="borda" >10/07/2001</td >
      <td class="borda" >N</td >
      <td class="borda" >Josevaldo</td >
      <td class="borda" >AB+</td >
      <td class="borda" >Sim, ele possui um problema cardíaco</td >
      <td class="borda" >Ele come de tudo, só não gosta quando não tem comida</td >
      <td class="borda" >Toma dois remedios pela manhã e mais um de noite</td >
      <td class="borda" >Possui leve alergia a picada de mosquito</td >
      <td class="borda" >Sempre deixe comida disponivel, principalmente durante a noite</td >
    </tr>
  </tbody>
</table>
</div>

@endsection