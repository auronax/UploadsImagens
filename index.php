
<html lang="Pt-BR">

<head>
    <title>Upload de imagens</title>
    <link rel="stylesheet" type="text/css" href="modelar/style.css" />
    <script type="text/javascript" src="modelar/jquery-1.11.2.min.js" ></script>
    <script type="text/javascript" src="modelar/jquery.form.min.js" ></script>
    <script type="text/javascript" src="modelar/script.js" ></script>

</head>

<body>

    <form id="formImagem" action="classe/fotos.php" method="post" enctype="multipart/form-data">
        <fieldset class="fieldset_formulario">
            <label class="label_formulario">
                <input class="botao_upload" type="file" name="imagem[]" multiple="" onchange="enviarImagemForm();" />
            </label>
        </fieldset>

    </form>

    <div id="galery-imagens"></div>
</body>

</html>




