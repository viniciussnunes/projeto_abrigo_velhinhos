@extends('template.menu_e_footer')

@section('content')
<div class="block-31" style="position: relative;">
    <div>
      <div class="block-30 block-30-sm item" style="background-image:url({{url('img/idosa5.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Eventos e Notícias</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div class="site-section">
      <div class="container">  
        <div class="row">
          @foreach($retorno as $noticia)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
              <div class="post-entry">
                <div class="idDiv">{!!html_entity_decode($noticia['conteudo'])!!}</div>
              </div>
            </div>
          @endforeach
          <!-- <script>
            var conteudo = {!! json_encode($retorno[0]['titulo']) !!};
            var element = document.getElementById('idDiv2');
            element.innerHTML = conteudo;
          </script> -->
        </div>
      </div>
    </div>

@endsection