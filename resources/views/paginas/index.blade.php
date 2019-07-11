@extends('template.menu_e_footer')

@section('content')

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block item" >
        <img src="{{ asset('img/idosa.jpg') }}">
        <div class="card-img-overlay">
          <!-- <div class="container">
          <p> O Abrigo dos Velhinhos de Tubarão, Santa Catarina, atua há anos cuidando dos idosos da região. Seu principal intuito é oferecer um local que possua os cuidados necessários para os mesmos. O abrigo está localizado na rua São João, 1125 (CEP: 88704-100) em Tubarão. Para entrar em contato, basta ligar para o número (48) 3628-0351. Os idosos que se encontram no abrigo podem receber visitas. As visitas são realizadas de segunda a sexta das 15:00 às 17:00 e nos finais de semana, das 14:00 às 18:00. Vale a pena conhecer mais sobre o trabalho do local e ajudar! “Quando a velhice chegar, aceita-a, ama-a. Ela é abundante em prazeres se souberes amá-la.”, Sêneca.</p>
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon">
              <img src="{{ asset('img/I.png') }}" alt="">
            </div>
            <div class="media-body">
              <h3 class="heading">Participe dos Eventos</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="/noticias">Saiba Mais</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon">
            <img src="{{ asset('img/doe.png') }}" alt="">
            </div>
            <div class="media-body">
              <h3 class="heading">Faça sua Doação</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#">Saiba Mais</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon">
              <img src="{{ asset('img/voluntary.png') }}" alt="">
            </div>
            <div class="media-body">
              <h3 class="heading">Seja um Voluntário</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="/cadastroVoluntario">Saiba Mais</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div>
  
<!-- ########################ICONES-MEIO###################### -->
          <div id="div-icones">
              <div class="icones-home"><a href="/noticias"><img src="{{ asset('img/I.png') }}" alt=""></a><p>Fique atualizado</p></div>
              <div id="icone-center" class="icones-home"><a href="#"><img src="{{ asset('img/doe.png') }}" alt=""></a><p>Doe</p></div>
              <div class="icones-home"><a href="/cadastroVoluntario"><img src="{{ asset('img/voluntary.png') }}" alt=""></a><p>Seja um voluntario</p></div>
          </div>
          <div class="barra container"></div>
          <div class="text-center"><h2>Colaboradores</h2></div>


  @endsection  