<?php
include_once("conexao.php");
$del = trim($_GET['d']);
$sql = "DELETE FROM mangas WHERE id = $del";
$conn = mysqli_query($ed,$sql);
header("location:../exibir.php?");
?>