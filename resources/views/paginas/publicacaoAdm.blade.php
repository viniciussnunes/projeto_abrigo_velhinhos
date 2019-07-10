@extends('template.menuAdm')

@section('contentAdm')

<div class="container">
  <h1 class="text-center" style="margin-top: 20px">Crie sua publicação</h1>
  <div id="summernote"></div>
  <button id="save" class="btn btn-primary" style="margin-top: 10px" onclick="save()" type="button">Salvar</button>
  <div id="div-componente"></div>
</div>

<script>
  $('#summernote').summernote({
    focus: true,
    height: 300,
    codemirror: {
      theme: 'eclipse'
    }
  });

 var save = function() {
    var markupStr = $('#summernote').summernote('code');
    // $('.click2edit').summernote('destroy');
    console.log(markupStr);
   document.getElementById("div-componente").innerHTML = markupStr;
  };
</script>



@endsection