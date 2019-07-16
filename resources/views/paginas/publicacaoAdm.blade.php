@extends('template.menuAdm')

@section('contentAdm')

<div class="container">
    <h1 class="text-center" style="margin-top: 20px">Crie sua publicação</h1>

    <form action="/publicacaoAdm/store" method="get" id="formPublicacao" style="margin-bottom: 10px">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="pubTitulo">Título da Publicação <span class="requerido">*</span></label>
                <input id="pubTitulo" type="text" class="form-control" name="pubTitulo">
            </div>
            <div class="form-group col-md-12">
                <label>Conteúdo da Publicação<span class="requerido">*</span></label>
                <div id="summernote"></div>
                <input id="pubTexto" type="text" name="pubTexto" value="" style="display:none">
                <input id="idNoticia" type="text" name="idNoticia" value="1" style="display:none">
            </div>
        </div>

        <button type="button" id="btn-cadastrar" style="background-color: rgb(121, 204, 171)" class="btn btn-primary">Cadastrar</button>
        <button type="button" class="btn btn-danger" style="color:white" onclick="window.location='/publicacaoAdm'">Cancelar</button>

    </form>
</div>

<script>
    $('#summernote').summernote({
        focus: true,
        height: 200,
        codemirror: {
            theme: 'eclipse'
        }
    });

    $(document).ready(function () {

        $('#btn-cadastrar').on('click', function () {
            
            var contentPublicacao = $('#summernote').summernote('code');
            
            validador = '';
            ($('#pubTitulo').val() == '') ? validador += '<li>O TÍTULO da publicação</li>' : '';
            (contentPublicacao == '<p><br></p>' || contentPublicacao == '') ? validador += '<li>O CONTEÚDO da publicação</li>' : '';

            if (validador != '') {
                Swal.fire({
                    type: 'error',
                    title: 'Campos obrigatórios',
                    html: validador,
                    footer: '<a>Favor preencher os campos acima!</a>',
                })
                validador = '';
                return false;
            }

            $('#pubTexto').attr('value',contentPublicacao);

            Swal.fire({
                title: 'Cadastro realizado',
                text: "ok",
                type: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value){
                }
                $('#formPublicacao').submit();
            })

        });

    });
</script>

@endsection