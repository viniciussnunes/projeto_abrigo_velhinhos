@extends('template.menu_e_footer')

@section('content')
  <div class="container">

    <div style="display: flex; margin-top: 50px; justify-content:space-between; margin-botton: 50px">
      <div class="caixaTexto">
        <h5 class="mt-0 mb-1">Media Object</h5>
        It is a long established fact that a reader will be distracted byts layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      </div>
      <img width="450" height="auto" src="{{asset('img/logo/abrigologo.png')}}" >
    </div>

    <div class="divSoria"></div>

    <div style="display: flex; margin-top: 50px; justify-content:space-between; margin-botton: 50px">
        <img width="450" height="auto" src="{{asset('img/logo/abrigologo.png')}}" >
      <div class="caixaTexto">
        <h5 class="mt-0 mb-1 ">Media Object</h5>
        It is a long established fact that a reader will be distracted by the readable contmore-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      </div>
    </div>
    <div class="divSoria"></div>

  </div>
@endsection