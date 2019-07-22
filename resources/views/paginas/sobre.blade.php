@extends('template.menu_e_footer')

@section('content')

<div class="block-31" style="position: relative;">
    <div>
      <div class="block-30 block-30-sm item" style="background-image:url({{ url('img/abrigo2.jpg')}})" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Sobre o Abrigo</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="site-section mb-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 mb-5">
          <img src="{{ asset('img/abrigo.jpg') }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <p>O Abrigo dos Velhinhos de Tubarão, Santa Catarina, atua há anos cuidando dos idosos da região.</p>
            <p>Seu principal intuito é oferecer um local que possua os cuidados necessários para os mesmos.</p>
            <p>O abrigo está localizado na rua São João, 1125 (CEP: 88704-100) em Tubarão. Para entrar em contato, basta ligar para o número (48) 3628-0351.</p>
          </div>
          <div class="col-md-6">
            <p>Os idosos que se encontram no abrigo podem receber visitas. O local funciona das 15:00 às 17:00 de segunda a sexta e nos finais de semana, das 14:00 às 18:00.</p>
            <p>Vale a pena conhecer mais sobre o trabalho do local e ajudar! “Quando a velhice chegar, aceita-a, ama-a. Ela é abundante em prazeres se souberes amá-la.”, Sêneca.</p>
        </div>
      </div>
      
      <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
          <h2>Nossos Colaboradores</h2>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('img/idosa.jpg') }}" alt="Logo da Empresa">
                <h3 class="block-38-heading">Empresa 1</h3>
                <p class="block-38-subheading">----------</p>
              </div>
              <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('img/idosa.jpg') }}" alt="Image placeholder">
                <h3 class="block-38-heading">Empresa 2</h3>
                <p class="block-38-subheading">----------</p>
              </div>
              <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('img/idosa.jpg') }}" alt="Image placeholder">
                <h3 class="block-38-heading">Empresa 3</h3>
                <p class="block-38-subheading">----------</p>
              </div>
              <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="{{ asset('img/idosa.jpg') }}" alt="Image placeholder">
                <h3 class="block-38-heading">Empresa 4</h3>
                <p class="block-38-subheading">----------</p>
              </div>
              <div class="block-38-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="block-31 mb-5" style="position: relative;">
          <div class="owl-carousel loop-block-31">
            <div class="block-30 no-overlay item" style="background-image:url({{ url('img/idosa2.png')}})"></div>
            <div class="block-30 no-overlay item" style="background-image:url({{ url('img/idosa3.jpg')}})"></div>
            <div class="block-30 no-overlay item" style="background-image:url({{ url('img/idosa4.jpg')}})"></div>
          </div>
        </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <div class="card" style="">
            <img class="card-img-top" src="{{url('img/doe.jpg')}}" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Faça uma doação</h5>
              <p class="card-text">Qualquer quantia ajuda, sua atitude fará a diferença!</p>
              <a href="#" class="btn btn-primary">Doar</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">

          <div class="card" style="">
            <img class="card-img-top" src="{{url('img/eventos.jpg')}}" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title">Eventos e notícias</h5>
              <p class="card-text">Confira nossos eventos e as principais notícias</p>
              <a href="/noticias" class="btn btn-primary">Confira</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">

          <div class="card" style="">
              <img class="card-img-top" src="{{url('img/voluntario.jpg')}}" alt="Imagem de capa do card">
              <div class="card-body">
                <h5 class="card-title">Seja voluntário</h5>
                <p class="card-text">Toda mão de obra é bem vinda, venha ajudar o próximo!</p>
                <a href="/cadastroVoluntario" class="btn btn-primary">Cadastre-se</a>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>



                
   
@endsection