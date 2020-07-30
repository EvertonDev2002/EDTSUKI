<?php
include_once("conexao.php");
$titulo = trim($_POST['titulo']);
$volume = trim($_POST['volume']);
$autor = trim($_POST['autor']);
$genero = trim($_POST['genero']);
$status = trim($_POST['status']);
$capitu = trim($_POST['capitulo']);
$id = trim($_POST['id']);
/* $editora = trim($_POST['editora']); */
if(in_array(4, $_FILES['foto'])){

    if(!empty($capitu)){

        $sql_code =  "UPDATE mangas SET datah = NOW(), nome = '$titulo', capitulo = '$capitu', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');
    }elseif(!empty($volume)){

        $sql_code =  "UPDATE mangas SET datah = NOW(), nome = '$titulo', volume = '$volume', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');
    }
}else{
    
      if(!empty($capitu)){

        $tipo_arquivo = substr($_FILES['foto']['name'], -4);
        $nome = md5(time()) . $tipo_arquivo;
        $dir = "../../cache_upload/";
        move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
        $sql_code =  "UPDATE mangas SET arquivo = '$nome', datah = NOW(), nome = '$titulo', capitulo = '$capitu', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');
      }elseif(!empty($volume)){

        $tipo_arquivo = substr($_FILES['foto']['name'], -4);
        $nome = md5(time()) . $tipo_arquivo;
        $dir = "../../cache_upload/";
        move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
        $sql_code =  "UPDATE mangas SET arquivo = '$nome', datah = NOW(), nome = '$titulo', volume = '$volume', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');
      }
}
?>