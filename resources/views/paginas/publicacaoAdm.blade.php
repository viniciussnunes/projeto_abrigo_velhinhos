@extends('template.menuAdm')

@section('contentAdm')

<div class="container">
    <h1 class="text-center" style="margin-top: 20px">Crie sua publicação</h1>

    <form action="#" method="get" id="formPublicacao" style="margin-bottom: 10px">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="parentesco">Título da Publicação <span class="requerido">*</span></label>
                <input id="parentesco" type="text" class="form-control" name="parentesco">
            </div>
            <div class="form-group col-md-12">
                <label for="parentesco">Conteúdo da Publicação<span class="requerido">*</span></label>
                <div id="summernote"></div>
            </div>
        </div>

        <button type="button" id="btn-cadastrar" class="btn btn-primary">Cadastrar</button>
        <button type="button" class="btn btn-danger" onclick="window.location='/publicacaoAdm'">Cancelar</button>

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

        validador = [];
        $('#btn-cadastrar').on('click', function () {
            var contentPublicacao = $('#summernote').summernote('code');

            console.log(contentPublicacao);

            ($('#parentesco').val() == '') ? validador += '<li>O título da PUBLICAÇÃO</li>' : null;
            (contentPublicacao == '<p><br></p>' || contentPublicacao == '') ? validador += '<li>O conteúdo da PUBLICAÇÃO</li>' : null;

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
                    $('#formPublicacao').submit();
                }
            })

        });

    });
</script>

@endsection