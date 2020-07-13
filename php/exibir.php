<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NoobPHP - Mangás</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/exibir.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="op">
        <ul>
            <li><a href="cadastrar.php">Cadastrar</a></li>
            <li><a href="exibir.php">Mangás</a></li>
        </ul>
    </nav>
    <div class="centro">
        <div class="div_Lado">
        <?php include_once("../php/processamento/conexao.php");
            $code = "SELECT * FROM edshow";
            $resul = mysqli_query($ed, $code);
            if($resul){
                while($row = mysqli_fetch_array($resul)){?>
                <div class="div_foto"><img src="../cache_upload/<?php echo $row['arquivo']?>">
                <div class="div_text">
                    <p>Título: <?php echo $row['titulo']?></p>
                    <p>Gênero: <?php echo $row['genero']?></p>
                    <p>Volumes: <?php echo $row['volume']?></p>
                    <p>Autor: <?php echo $row['autor']?></p>
                    <p id="p_data">Última atualização: <?php echo $row['datah']?></p>
                </div>
                <div id="Div_Icon_Flex">
                    <div class="div_icon"><a href="editar.php?
                        t=<?php echo $row['titulo']?>&
                        v=<?php echo $row['volume']?>&
                        a=<?php echo $row['autor']?>&
                        g=<?php echo $row['genero']?>&
                        f=<?php echo $row['arquivo']?>&
                        i=<?php echo $row['id']?>">
                        <img src="../image/editar.png" title="Editar Arquivo"></a>
                    </div>
                    <div class="div_icon" ><label for="modal_click"><img src="../image/apagar.png" title="Apagar Arquivo"></label>
                    <input type="submit" onclick="abrir()" id="modal_click"></div>
                </div>
               </div>
               <div class="Div_Fundo_Modal"  id="<?php echo $row['id']?>"> 
                    <div class="Divi_Modal">
                            <span onclick="fechar()">&times;</span>
                            <p>Tem certeza que deseja excluir? Clique no ícone acima para cancelar.</p>
                            <a href="processamento/deletar.php?ed=<?php echo $row['id']?>">Apagar agora</a>
                            <script>
                                function abrir(){
                                    document.getElementById('<?php echo $row['id']?>').style.top = "14.5%";
                                }

                                function fechar(){
                                    document.getElementById('<?php echo $row['id']?>').style.top = "-100%";
                                }
                            </script>
                        </div>
                    </div>
               <?php
             }
         }
?>
        </div>
    </div>
</body>
</html>