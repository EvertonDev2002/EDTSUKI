<?php
session_start();
include("conexao.php");
if(filter_input(INPUT_POST,'button', FILTER_SANITIZE_STRING)){
    $user = filter_input(INPUT_POST,'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_NUMBER_INT);
    /* $passSha = sha1($pass); */
    if(!empty($user) AND !empty($pass)){
        $code_sql = "SELECT * FROM administrador WHERE usuario = '$user' AND senha = '$pass'";
        $resul = mysqli_query($ed,$code);
        if($resul){
            if(mysqli_fetch_assoc($resul) == 1){
                if($row = mysqli_fetch_assoc($resul)){
                $_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $row['usuario'];
                $_SESSION['perso'] = $row['personagem'];
                header("Location:../inicio.php");
                }
            }
        } 
    }
}else{
    $_SESSION['msg'] = "Não tente bular o sistema. Seja honesto!";
    header("Location:../../index.php");
}
?> 