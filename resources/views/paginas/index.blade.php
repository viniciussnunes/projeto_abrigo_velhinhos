@extends('template.menu_e_footer')

@section('content')

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image:url({{url('img/idosa.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <h2 class="heading">Ajude o Abrigo dos Velhinhos de Tubarão a crescer.</h2>
            </div>
          </div>
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
              <img src="{{ asset('img/I.png') }}">
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
            <img src="{{ asset('img/doe.png') }}">
            </div>
            <div class="media-body">
              <h3 class="heading">Faça sua Doação</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href=#>Saiba Mais</a></p>
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
  
  <div class="featured-donate overlay-color" style="background-image:url({{url('img/abrigo.jpg')}})">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0">
          <img src="{{ asset('img/abrigo.jpg') }}" class="img-fluid">
        </div>
        <div class="col-lg-4 pr-lg-5">
          <span class="featured-text mb-3 d-block">Destaque</span>
          <h2>O Abrigo necessita de Reformas</h2>
          <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod numquam eius dolores facere commodi. Sequi dicta aut nulla ducimus error incidunt veritatis consequatur modi hic vel repudiandae, ullam at doloremque.</p>
          <p><a href=# class="btn btn-primary btn-hover-white py-3 px-5">Doe Agora</a></p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>Últimas Notícias</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href=/noticias class="mb-3 img-wrap">
              <img src="{{('img/noticia3.jpg')}}" class="img-fluid">
              <span class="date">23.07.2019</span>
            </a>
            <h3><a href="/noticias">Entrega do novo Site</a></h3>
            <p>Criado pela turma do Tecnico em Informatica para Internet do Senai Tubarão</p>
            <p><a href="/noticias">Ler Mais</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href=/noticias class="mb-3 img-wrap">
              <img src="{{('img/noticia2.jpg')}}" class="img-fluid">
              <span class="date">09.04.2019</span>
            </a>
            <h3><a href=/noticias>Doações para o Abrigo</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            <p><a href=/noticias>Ler Mais</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry">
            <a href=/noticias class="mb-3 img-wrap">
              <img src="{{('img/noticia1.jpg')}}" class="img-fluid">
              <span class="date">09.04.2019</span>
            </a>
            <h3><a href=/noticias>Visita da OSCTEC</a></h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            <p><a href=/noticias>Ler Mais</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .section -->

  @endsection  