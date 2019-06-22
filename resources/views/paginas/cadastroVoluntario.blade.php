@extends('template.menu_e_footer')

@section('content')

<main role="main" class="container">

  <h1>Seja um voluntário</h1>

<form>
  <div class="form-group">
     <label for="inputAddress">Nome Completo</label>
     <input type="text" class="form-control" name="volnome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="inputAddress">E-mail</label>
    <input type="text" class="form-control" name="volemail" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Telefone</label>
    <input type="text" class="form-control" name="voltelefone" placeholder="Telefone">
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Função</label>
        <input type="text" class="form-control" name="volfuncao" placeholder="Função">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Tempo Hábil</label>
        <select type="text" class="form-control" name="voltempo" placeholder="Tempo Hábil">
          <option>...</option>
          <option>Matutino</option>
          <option>Vespertino</option>
          <option>Integral</option>>
        </select>
      </div>
    </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</main>

@endsection