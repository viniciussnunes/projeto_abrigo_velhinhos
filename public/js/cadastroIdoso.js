$(document).ready(function(){

  validador = '';
  $('#btn-cadstrar').on('click',function(){
    ($('#nomeIdoso').val() == '') ? validador += '<li>Nome do IDOSO</li>' : null;
    ($('#seAposentado').val() == '') ? validador += '<li>Se o idoso é APOSENTADO</li>' : null;
    ($('#nomeResponsavel').val() == '') ? validador += '<li>Nome do RESPONSÁVEL</li>' : null;
    ($('#telCel').val() == '') ? validador += '<li>Um número de CELULAR</li>' : null;
    ($('#parentesco').val() == '') ? validador += '<li>O grau de PARENTESCO</li>' : null;
    ($('#cidade').val() == '') ? validador += '<li>Em qual CIDADE o responsável reside</li>' : null;
    
    if (validador) {
      Swal.fire({
        type: 'error',
        title: 'Campos obrigatórios',
        html: validador,
        footer: '<a>Favor preencher os campos acima!</a>',
      })
      validador = '';
      return false;
    }

    Swal.fire({
      title: 'Cadastro realizado',
      text: "Entraremos em contato assim que possível",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
    }).then((result) => {
      if (result.value) {
        $('#formCadIdoso').submit();
      }
    })

  });

  $('.data').mask('00/00/0000');
  $('.ddd_tel').mask('(00) 0000-0000');
  $('.ddd_cel').mask('(00) 0.0000-0000');

});