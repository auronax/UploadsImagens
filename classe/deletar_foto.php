<?php

if($_POST['id_imagem']){
    unlink('../fotos/'.$_POST['id_imagem']);
    echo $_POST['id_imagem'];
}