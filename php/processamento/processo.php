<?php
include_once("conexao.php");
$titulo = trim($_POST['titulo']);
$volume = trim($_POST['volume']);
$autor = trim($_POST['autor']);
$genero = trim($_POST['genero']);
$status = trim($_POST['status']);
$capitu = trim($_POST['capitulo']);
/* $editora = trim($_POST['editora']); */

if((empty($capitu)) and (empty($volume))){
  $tipo_arquivo = substr($_FILES['foto']['name'], -4);
  $nome = md5(time()) . $tipo_arquivo;
  $dir = "../../cache_upload/";
  move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
  $sql_cod =  "INSERT INTO mangas(arquivo, datah, nome, autor, statush, genero, favoritos) VALUES('$nome',NOW(),'$titulo','$autor','$status','$genero','0')";
  $envio = mysqli_query($ed, $sql_cod);
  header('Location:../cadastrar.php');
}elseif(!empty($capitu)){
  $tipo_arquivo = substr($_FILES['foto']['name'], -4);
  $nome = md5(time()) . $tipo_arquivo;
  $dir = "../../cache_upload/";
  move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
  $sql_code =  "INSERT INTO mangas(arquivo, datah, nome, capitulo, autor, statush, genero, favoritos) VALUES('$nome',NOW(),'$titulo','$capitu','$autor','$status','$genero','0')";
  $envio = mysqli_query($ed, $sql_code);
  header('Location:../cadastrar.php');
}elseif(!empty($volume)){
  $tipo_arquivo = substr($_FILES['foto']['name'], -4);
  $nome = md5(time()) . $tipo_arquivo;
  $dir = "../../cache_upload/";
  move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
  $sql_code =  "INSERT INTO mangas(arquivo, datah, nome, volume, autor, statush, genero, favoritos) VALUES('$nome',NOW(),'$titulo','$volume','$autor','$status','$genero','0')";
  $envio = mysqli_query($ed, $sql_code);
  header('Location:../cadastrar.php');
}
?>