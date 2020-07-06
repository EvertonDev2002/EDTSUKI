<?php
include_once("conexao.php");
$titulo = $_POST['titulo'];
$volume = $_POST['volume'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];

if(isset($_FILES['foto'])){
    $tipo_arquivo = substr($_FILES['foto']['name'], -4);
    $nome = md5(time()) . $tipo_arquivo;
    $dir = "../../cache_upload/";

  move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$nome);
$sql_code =  "INSERT INTO edshow(arquivo, datah, titulo, volume, autor, genero) VALUES('$nome', NOW(), '$titulo', '$volume','$autor','$genero')";
$envio = mysqli_query($ed, $sql_code);
header('Location:../cadastrar.php');
}

?>