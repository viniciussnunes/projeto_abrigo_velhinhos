$(document).ready(function(){

    validador = '';
    $('#btn-cadstrar').on('click',function(){
      ($('#nome').val() == '') ? validador += '<li>Seu nome</li>' : null;
      ($('#telCel').val() == '') ? validador += '<li>Um número de CELULAR</li>' : null;
      
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
          $('#formCadVoluntario').submit();
        }
      })
  
    });

    $('.ddd_cel').mask('(00) 0.0000-0000');
  
  });