<?php
include_once("conexao.php");
$del = trim($_GET['ed']);
$favorito = trim($_GET['f']);

if($favorito == 0){
  $sql = "UPDATE mangas SET favoritos = '1' WHERE id = $del";
  $conn = mysqli_query($ed,$sql);
  header("location:../exibir.php?");
}elseif($favorito == 1){
  $sql = "UPDATE mangas SET favoritos = '0' WHERE id = $del";
  $conn = mysqli_query($ed,$sql);
  header("location:../exibir.php?");
}      
?>