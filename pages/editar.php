<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Adicionar - EdTsuki</title>
    <link rel="icon" href="../images/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../images/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../images/icons/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/editar.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src='../scripts/preview.js'></script>
</head>
<body>
   <div id="tudo">
   <?php
        $page = trim(filter_input(INPUT_GET,'page', FILTER_SANITIZE_NUMBER_INT));
        $foto = trim(filter_input(INPUT_GET,'foto', FILTER_SANITIZE_STRING));
        $id = trim(filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT));
        $titulo = trim(filter_input(INPUT_GET,'titulo', FILTER_SANITIZE_STRING));
        $autor = trim(filter_input(INPUT_GET,'autor', FILTER_SANITIZE_STRING));
        $volume = trim(filter_input(INPUT_GET,'volume', FILTER_SANITIZE_NUMBER_INT));
        $capitulo = trim(filter_input(INPUT_GET,'capitulo', FILTER_SANITIZE_NUMBER_INT));
        $status = trim(filter_input(INPUT_GET,'status', FILTER_SANITIZE_STRING));
        $genero = trim(filter_input(INPUT_GET,'genero', FILTER_SANITIZE_STRING));
    ?>
   <header class="menu">
        <div><a href="inicio.php">EdTsuki</a></div>
        <div>
        <form method="GET" action="resultado.php">
                <input maxlength="50" type="text" autocomplete="off" name="pesquisa"> 
                <button type="submit"></button>  
        </form>
        </div>
        <nav>
            <ul>
                <li><a href="inicio.php">Início</a></li>
                <li><a href="cadastrar.php">Adicionar</a></li>
                <li><a href="exibir.php?page=<?php echo$page ?>">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <form method="POST" action="functions/atualizar.php" enctype="multipart/form-data">
            <div class="Div_Form">
                <div class="Div_Campos">
                        <legend>Informações do Mangá</legend>
                    <div>
                        <label for="manga">Título</label> 
                            <input type="text" id="manga" value="<?php echo$titulo;?>" name="titulo" required autocomplete="off">
                    </div>
                    <div>
                        <label for="aut">Autor</label> 
                            <input type="text" id="aut" value="<?php echo$autor;?>" name="autor" required autocomplete="off">
                    </div>
                    <?php
                    if(($volume) and ($capitulo)){
                       echo"
                    <div>
                        <label for='volu'>Volume</label> 
                                <input type='number' id='volu' value='$volume' name='volume' autocomplete='off'>
                    </div>";
                    echo"
                    <div>
                        <label for='capi'>Capítulo</label> 
                            <input type='number' id='capi' value='$capitulo' name='capitulo' autocomplete='off'>
                    </div>";

                    }elseif($volume){
                        echo"
                    <div>
                        <label for='volu'>Volume</label> 
                                <input type='number' id='volu' value='$volume' name='volume' autocomplete='off'>
                    </div>";
                    }elseif($capitulo){
                        echo"
                    <div>
                        <label for='capi'>Capítulo</label> 
                            <input type='number' id='capi' value='$capitulo' name='capitulo' autocomplete='off'>
                    </div>";
                    }?>
                    <!-- <div>
                         <label for="edit">Editora</label>
                        <input type="text" id="edit" name="editora" required autocomplete="off"><br/>
                    </div> -->
               <div>
                <label for="opS">Status</label>
                        <select id="opSta" name="status" required autocomplete="off">
                            <option><?php echo$status;?></option>
                            <option>Completo</option>
                            <option>Lendo</option>
                            <option>Parado</option>
                            <option>Pedente</option>
                        </select>
               </div>
                <div>
                   <label for="opG">Gênero</label>
                        <select id="opG" name="genero" required autocomplete="off">
                            <option><?php echo$genero;?></option>
                            <option>Komodo</option>
                            <option>Shounen</option>
                            <option>Shoujo</option>
                            <option>Gekigá</option>
                            <option>Seinen</option>
                            <option>Josei</option>
                        </select>
                </div>
                    <button type="submit">Adicionar</button>
                </div>
                <div class="fotoPrew">
                        <img id="mostrarAqui" src="../images/img/<?php echo$foto;?>">
                        
                    <label for="esfoto"><p>Capa</p></label>
                        <input style="display: none;" id="esfoto" type="file" accept="image/*" name="foto" onchange="mostrarImagem(event)">
                </div>  
            </div>
            <input type="hidden" value="<?php echo$id;?>" name="id">
            <input type="hidden" value="<?php echo$foto;?>" name="nomephoto"> 
        </form>
    </div>
    <footer class="rodape">
        <h1>EdTsuki</h1>
        <p>Tenha um maior controle sobre os seus animes e mangás</p>
        <div>
            <a class="Image1" href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank"></a>
            <a class="image2" href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber" title="Canal" target="_blank"></a>
        </div>
    </footer>
   </div>
</body>
</html>