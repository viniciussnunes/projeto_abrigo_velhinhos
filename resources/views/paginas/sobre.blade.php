@extends('template.menu_e_footer')

@section('content')

        <div class="container" >
            <div class="card text-white" style="margin-bottom:100px;">
                <img src="{{ asset('img/image.jpg') }}" class="img-sobre" alt="...">
                <div class="card-img-overlay">
                    <div id="texto-abrigo">
                    <h5 class="card-title">Sobre</h5>
                    <p class="card-text"> O Abrigo dos Velhinhos de Tubarão, Santa Catarina, atua há anos cuidando dos idosos da região. Seu principal intuito é oferecer um local que possua os cuidados necessários para os mesmos. O abrigo está localizado na rua São João, 1125 (CEP: 88704-100) em Tubarão. Para entrar em contato, basta ligar para o número (48) 3628-0351. Os idosos que se encontram no abrigo podem receber visitas. As visitas são realizadas de segunda a sexta das 15:00 às 17:00 e nos finais de semana, das 14:00 às 18:00. Vale a pena conhecer mais sobre o trabalho do local e ajudar! “Quando a velhice chegar, aceita-a, ama-a. Ela é abundante em prazeres se souberes amá-la.”, Sêneca.</p>
                    <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>

@endsection