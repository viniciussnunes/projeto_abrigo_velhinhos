@extends('template.menu_e_footer')

@section('content')

<main role="main" class="container">

<h2>Cadastre um Idoso</h2>


<form action="/cadastrarIdoso" method="post">
      
      <div class="form-group">
          <label for="inputEmail4">Nome Completo</label>
          <input type="text" class="form-control" name="idnome" placeholder="Nome">
        </div>
      
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Data de Nascimento</label>
            <input type="date" class="form-control" name="idnasci" placeholder="Data">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Aposentado</label>
            <select type="text" class="form-control" name="idaposentado" placeholder="Aposentado">
              <option>...</option>
              <option>Sim</option>
              <option>Não</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Tipo Sanguineo</label>
            <select type="text" class="form-control" name="idsangue" placeholder="Tipo Sanguineo">
              <option>...</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>
          </div>

          <div class="form-group col-md-6">
          <label for="inputPassword4">Doenças crônicas?</label>
          <input type="text" class="form-control" name="iddoenca" placeholder="Descreva">
        </div>
      

          <div class="form-group col-md-6">
          <label for="inputPassword4">Observções sobre Alimentação</label>
          <input type="text" class="form-control" name="idalimentacao" placeholder="Descreva">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Observções sobre Medicação</label>
          <input type="text" class="form-control" name="idmedicacao" placeholder="Descreva">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Descreva sobre alguma Alergia</label>
          <input type="text" class="form-control" name="idalergia" placeholder="Descreva">
        </div>

        <div class="form-group col-md-6">
          <label for="inputPassword4">Observções em Geral</label>
          <input type="text" class="form-control" name="idobsgeral" placeholder="Descreva">
        </div>

        </div>

<!-- --######################################################################################################################## -->
      
      
        <h3>Responsável pelo Idoso</h3>
        
        <div class="form-group">
          <label for="inputEmail4">Nome Completo</label>
          <input type="text" class="form-control" name="resnome" placeholder="Nome">
        </div>

      <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">CPF</label>
                <input type="text" class="form-control" name="rescpf" placeholder="CPF">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Telefone</label>
                <input type="text" class="form-control" name="restelefone" placeholder="Telefone">
              </div>
            </div>

            <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Data de Nascimento</label>
                    <input type="date" class="form-control" name="resdate" placeholder="Data de Nascimento">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">E-mail</label>
                    <input type="text" class="form-control" name="resemail" placeholder="E-mail">
                  </div>
                </div>

                <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Grau de Parentesco</label>
                        <input type="text" class="form-control" name="resparente" placeholder="Nome">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">CEP</label>
                        <input type="number" class="form-control" name="rescep" placeholder="CEP" onblur="pesquisacep(this.value);">
                      </div>
                    </div>

                    <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Número</label>
                            <input type="number" class="form-control" name="resnumero" placeholder="Número">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Rua</label>
                            <input type="text" class="form-control" name="resrua" id="resrua" placeholder="Rua">
                          </div>
                        </div>

                        <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Bairro</label>
                                <input type="text" class="form-control" name="resbairro" id="resbairro" placeholder="Bairro">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Cidade</label>
                                <input type="text" class="form-control" name="rescidade" id="rescidade" placeholder="Cidade">
                              </div>
                            </div>

      <button type="submit" id="botaoIdoso" class="btn btn-primary botao-nargin">Cadastrar</button>
    </form>

</main>


@endsection