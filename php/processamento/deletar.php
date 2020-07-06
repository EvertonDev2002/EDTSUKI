<?php
include_once("conexao.php");
$del = $_GET['ed'];
$sql = "DELETE FROM edshow WHERE id = $del";
$conn = mysqli_query($ed,$sql);
header("location:../exibir.php?");
?>