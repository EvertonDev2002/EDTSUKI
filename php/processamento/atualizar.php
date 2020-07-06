<?php
include_once("conexao.php");
$titul = $_POST['titulo'];
$volum = $_POST['volume'];
$auto = $_POST['autor'];
$gener = $_POST['genero'];
$idh = $_POST['ide'];

$s_codej = "UPDATE edshow SET datah = NOW(), titulo = '$titul', volume = '$volum', autor = '$auto', genero = '$gener' WHERE id = '$idh'";
$r = mysqli_query($ed, $s_codej);
header('Location:../exibir.php?');
?>