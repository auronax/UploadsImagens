<?php


  $_UP['tipo'] = array('png','jpg','jpeg');
  $imagem  = $_FILES['imagem'];
  $img     = $_FILES['imagem']['name'];
  $tmp     = $_FILES['imagem']['tmp_name'];
  $dirname = '../fotos';

  $count = count($imagem['name']);


  if($count > 0){
      $fotos = array();
      for($i = 0; $i < $count; $i++){

          $ext = end(explode('.', $imagem['name'][$i]));

          if(array_search($ext, $_UP['tipo']) === false){
              echo "Envie arquivos com as seguintes extensões: jpg, png ou jpeg";
          }else{
              $oldname = $tmp[$i];
              $newname = date('YmdHis') . $i . '.' . $ext;

              if(move_uploaded_file($oldname, $dirname . '/' . $newname)) {
                  $fotos[] = $newname;
              }else{
                  echo"Imagem não foi arquivada.";
              }

          }

      }
      echo json_encode($fotos);
  }