@extends('template.menu_e_footer')

@section('content')

<div class="card-deck card-home" id="divNoticias">
  <div class="card divNoticias">
    <div class="card-body">
      <h1 class="card-title">Sopão</h1>
      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio exercitationem consectetur, beatae ab sint dolorem illum, quia est quibusdam velit ipsum numquam ad optio fuga nobis maxime voluptas repellat laudantium?</p>
      <img class="card-img-top" src="{{ asset('img/FundoPreto.jpg') }}" alt="Card image cap">
    </div>
  </div>
  <div class="card divNoticias">
    <div class="card-body">
      <h1 class="card-title">Chá da Leide</h1>
      <p class="card-text">Lorem ipsum dolo Dignissimos adipisci porro mollitia fugiat cupiditate distinctio hic quaerat autem accusantium veniam expedita veritatis rem, laborum nihil tenetur perferendis repellendus vel molestiae?</p>
      <img class="card-img-top" src="{{ asset('img/FundoRosa.jpg') }}" alt="Card image cap">
    </div>
  </div>
</div>
<div class="divNoticias container">
  <h1>Prestação de contas</h1>
  <p class ="margin-bot">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, cupiditate ab, nemo aut soluta eaque animi quaerat laboriosam nam iusto, modi sapiente quisquam nulla aliquid veniam totam esse fugit voluptatem.</p>
</div>

@endsection