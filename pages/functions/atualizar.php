<?php
include_once("conexao.php");
$titulo = trim(filter_input(INPUT_POST,'titulo', FILTER_SANITIZE_STRING));
$autor = trim(filter_input(INPUT_POST,'autor', FILTER_SANITIZE_STRING));
$genero = trim(filter_input(INPUT_POST,'genero', FILTER_SANITIZE_STRING));
$status = trim(filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING));
$id = trim(filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT));
/* $editora = trim($_POST['editora']); */
if(in_array(4, $_FILES['foto'])){
    if((empty($_POST['capitulo']) and (empty($_POST['volume'])))){

      $sql_code =  "UPDATE mangas SET datah = NOW(), nome = '$titulo', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
      $envio = mysqli_query($ed, $sql_code);
      header("Location:../exibir.php");
    }
    elseif(!empty($_POST['capitulo'])){

      $capitu = trim(filter_input(INPUT_POST,'capitulo', FILTER_VALIDATE_INT));
      $sql_code =  "UPDATE mangas SET datah = NOW(), nome = '$titulo', capitulo = '$capitu', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
      $envio = mysqli_query($ed, $sql_code);
      header("Location:../exibir.php");
    }elseif(!empty(($_POST['volume']))){

      $volume = trim(filter_input(INPUT_POST,'volume', FILTER_VALIDATE_INT));
      $sql_code =  "UPDATE mangas SET datah = NOW(), nome = '$titulo', volume = '$volume', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
      $envio = mysqli_query($ed, $sql_code);
      header('Location:../exibir.php');
    }
}else{
  if($_FILES['foto']){

        $nome = $_POST['nomephoto'];
        $dir = "../../images/img/";
        move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);

    if((empty($_POST['capitulo']) and (empty($_POST['volume'])))){

      $sql_code =  "UPDATE mangas SET arquivo = '$nome', datah = NOW(), nome = '$titulo', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
      $envio = mysqli_query($ed, $sql_code);
      header('Location:../exibir.php');

    }elseif(!empty($_POST['capitulo'])){
  
        $capitu = trim(filter_input(INPUT_POST,'capitulo', FILTER_VALIDATE_INT));
        $sql_code =  "UPDATE mangas SET arquivo = '$nome', datah = NOW(), nome = '$titulo', capitulo = '$capitu', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');

    }elseif(!empty(($_POST['volume']))){
  
        $volume = trim(filter_input(INPUT_POST,'volume', FILTER_VALIDATE_INT));
        $sql_code =  "UPDATE mangas SET arquivo = '$nome', datah = NOW(), nome = '$titulo', volume = '$volume', autor = '$autor', statush = '$status', genero = '$genero' WHERE id ='$id'";
        $envio = mysqli_query($ed, $sql_code);
        header('Location:../exibir.php');
    }
  }
}
?>