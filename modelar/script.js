

function enviarImagemForm(){
    $('#formImagem').ajaxForm({
        dataType: 'json',
        success: function(data) {
            $(data).each(function(index, value) {
                if(data) {
                    $('#galery-imagens').append('<div class="div-image-pai">\n\
                        <div class="width-image" style="background-image: url(http://projetos.local/Arquivos_Cesar/uploads/fotos/' + value + ' )">\n\
                          <a class="fechar_imagem" data-value="' + value + '" onclick="limpar_foto(this)">[X]</a>\n\
                        </div>\n\
                        </div>');
                }else{
                    alert('Não gravou.');
                }
            });
        }
    }).submit();
}

function limpar_foto(objeto){
    $.ajax({
        url:'classe/deletar_foto.php',
        data: "id_imagem="+$(objeto).data('value'),
        type: "POST",
        success:function(data){
            if(data){
                $(objeto).parent().parent().remove();
                alert('Imagem deletada.');
            }
        }
    });
}
