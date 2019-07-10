@extends('template.menuAdm')

@section('contentAdm')
<h1 class="text-center container" style="width: 1100px; margin-top: 20px" >Crie sua publicação</h1>
<div class="container">
  <div id="summernote"></div>
  <button id="save" class="btn btn-primary" style="margin-top: 10px" onclick="save()" type="button">Salvar</button>
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
  };
</script>

@endsection