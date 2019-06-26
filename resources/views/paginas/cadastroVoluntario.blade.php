@extends('template.menu_e_footer')

@section('content')

<main role="main" class="container">

  <h1>Seja um voluntário</h1>

<form>
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="inputAddress">Nome Completo</label>
     <input type="text" class="form-control" name="volnome" placeholder="Nome">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">E-mail</label>
    <input type="text" class="form-control" name="volemail" placeholder="E-mail">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Telefone</label>
    <input type="text" class="form-control" name="voltelefone" placeholder="Telefone">
  </div>
  
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

      <div class="form-group col-md-6">
            <label for="inputEmail4">Data de Nascimento</label>
            <input type="date" class="form-control" name="volnasci" placeholder="Data">
          </div>


          <div class="form-group col-md-6">
               <label for="inputPassword4">CEP</label>
               <input type="number" class="form-control" name="volcep" placeholder="CEP" onblur="pesquisacep(this.value);">
           </div>
                    

           
          <div class="form-group col-md-6">
             <label for="inputEmail4">Número</label>
            <input type="number" class="form-control" name="volnumero" placeholder="Número">
          </div>
         <div class="form-group col-md-6">
            <label for="inputPassword4">Rua</label>
            <input type="text" class="form-control" name="resrua" id="volrua" placeholder="Rua">
         </div>
                       

                        
          <div class="form-group col-md-6">
              <label for="inputEmail4">Bairro</label>
              <input type="text" class="form-control" name="resbairro" id="volbairro" placeholder="Bairro">
          </div>
          <div class="form-group col-md-6">
             <label for="inputPassword4">Cidade</label>
             <input type="text" class="form-control" name="rescidade" id="volcidade" placeholder="Cidade">
          </div>
                            

    </div>
  
 
  <button type="submit" class="btn btn-primary botao-nargin">Cadastrar</button>
</form>

</main>

@endsection