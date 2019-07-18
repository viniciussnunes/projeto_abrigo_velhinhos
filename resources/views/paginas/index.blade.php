@extends('template.menu_e_footer')

@section('content')

  <div class="block-31" style="position: relative;">
    <div>
      <div class="block-30 item" style="background-image:url({{url('img/idosa.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
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

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{url('img/doe.jpg')}}" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Faça uma doação</h5>
              <p class="card-text">Qualquer quantia ajuda, sua atitude fará a diferença!</p>
              <a href="#" class="btn btn-primary">Doar</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{url('img/eventos.jpg')}}" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Eventos e notícias</h5>
              <p class="card-text">Confira nossos eventos e as principais notícias</p>
              <a href="#" class="btn btn-primary">Confira</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">

          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{url('img/voluntario.jpg')}}" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Seja voluntário</h5>
                <p class="card-text">Toda mão de obra é bem vinda, venha ajudar o próximo!</p>
                <a href="#" class="btn btn-primary">Cadastre-se</a>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
  
  <div class="featured-donate overlay-color" style="background-image:url({{url('img/abrigo.jpg')}})">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0 img-destaque">
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
            <a href=/noticias class="mb-3 img-wrap img-noticias">
              <img src="{{('img/noticia3.jpg')}}" class="img-fluid">
              <span class="date">23.07.2019</span>
            </a>
            <h3><a href="/noticias">Entrega do novo Site</a></h3>
            <p><a href="/noticias">Ler Mais</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry img-noticias">
            <a href=/noticias class="mb-3 img-wrap">
              <img src="{{('img/noticia2.jpg')}}" class="img-fluid">
              <span class="date">09.04.2019</span>
            </a>
            <h3><a href=/noticias>Doações para o Abrigo</a></h3>
            <p><a href=/noticias>Ler Mais</a></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="post-entry img-noticias">
            <a href=/noticias class="mb-3 img-wrap">
              <img src="{{('img/noticia1.jpg')}}" class="img-fluid">
              <span class="date">09.04.2019</span>
            </a>
            <h3><a href=/noticias>Visita da OSCTEC</a></h3>
            <p><a href=/noticias>Ler Mais</a></p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .section -->

  @endsection  