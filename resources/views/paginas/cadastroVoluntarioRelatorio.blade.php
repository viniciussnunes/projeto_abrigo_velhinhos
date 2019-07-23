@extends('template.menuAdm')

@section('contentAdm')

<div class="container tabela text-center" style="margin-top: 40px">
      <h1>Registro de Voluntários</h1>
      <h6>Esses são os registros de todas as pessoas que desejam se voluntariar</h6>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome Completo</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Whatsapp</th>
        <th scope="col">Habilidades</th>
      </tr>
    </thead>
    @foreach($voluntarios as $voluntario)
    <tbody>
      <tr>
        <th scope="row">{{$voluntario['id_voluntario']}}</th>
        <td class="borda">{{$voluntario['nome']}}</td>
        <td class="borda">{{$voluntario['email']}}</td>
        <td class="borda">{{$voluntario['tel_cel']}}</td>
        <td class="borda">{{$voluntario['whatsapp'] == 1 ? 'Sim' : 'Não'}}</td>
        <td class="borda">{{$voluntario['habilidades']}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@endsection