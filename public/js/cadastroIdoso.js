$(document).ready(function(){
  $('#testeSwall').on('click',function(){
    Swal.fire({
      title: 'Gostou?',
      text: "Ótimo, agora desenvolva o que falta pq não temos mais tempo!!!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'OK, vou fazer isso!'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Parabéns!',
          'Você tem futuro!!  ;)',
          'success'
        )
      }
    })
  });

  $('.data').mask('00/00/0000');
  $('.ddd_tel').mask('(00) 0000-0000');
  $('.ddd_cel').mask('(00) 0.0000-0000');
  $('.cep').mask('00.000-000');

});