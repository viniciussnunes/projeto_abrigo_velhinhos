@extends('template.menu_e_footer')

@section('content')
  <div class="container div-noticias">   
      <div class="media contnoticia">
        <div class="media-body">
          <h5 class="mt-0 mb-1">Media object</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p> 
        </div>
        <img width="500" height="auto" src="{{ asset('img/logo/abrigologo.png') }}"  alt="...">
      </div>
  </div>
@endsection