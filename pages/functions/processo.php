<?php
include_once("conexao.php");
$titulo = trim(filter_input(INPUT_POST,'titulo', FILTER_SANITIZE_STRING));
$volume = trim(filter_input(INPUT_POST,'volume', FILTER_VALIDATE_INT));
$autor = trim(filter_input(INPUT_POST,'autor', FILTER_SANITIZE_STRING));
$genero = trim(filter_input(INPUT_POST,'genero', FILTER_SANITIZE_STRING));
$status = trim(filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING));
$capitu = trim(filter_input(INPUT_POST,'capitulo', FILTER_VALIDATE_INT));
/* $editora = trim($_POST['editora']); */
if($_FILES['foto']){

  $tipo_arquivo = substr($_FILES['foto']['name'], -4);
  $nome = rand(10000, 90000000) . $tipo_arquivo;
  $dir = "../../images/img/";
  move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
  
  if((empty($capitu)) and (empty($volume))){

    $sql_cod =  "INSERT INTO mangas(arquivo, datah, nome, autor, statush, genero, favoritos) VALUES('$nome',NOW(),'$titulo','$autor','$status','$genero','0')";
    $envio = mysqli_query($ed, $sql_cod);
    header('Location:../cadastrar.php');
  }elseif(!empty($capitu)){
  
    $sql_code =  "INSERT INTO mangas(arquivo, datah, nome, capitulo, autor, statush, genero, favoritos) VALUES('$nome', NOW(),'$titulo','$capitu','$autor','$status','$genero','0')";
    $envio = mysqli_query($ed, $sql_code);
    header('Location:../cadastrar.php');
  }elseif(!empty($volume)){
  
    $sql_code =  "INSERT INTO mangas(arquivo, datah, nome, volume, autor, statush, genero, favoritos) VALUES('$nome', NOW(),'$titulo','$volume','$autor','$status','$genero','0')";
    $envio = mysqli_query($ed, $sql_code);
    header('Location:../cadastrar.php');
  }
}
?>