<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Adicionar - EdNoob</title>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/editar.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src='../js/preview.js'></script>
</head>
<body>
    <header class="menu">
        <div><a href="index.php">EdNoob</a></div>
        <div>
            <form method="POST" action="pesquisa.php">
                    <input maxlength="50" type="text" autocomplete="off" name="pesquisa"> 
                <button type="submit" name="pesquisar"></button>  
            </form>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastrar.php">Adicionar</a></li>
                <li><a href="exibir.php">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <?php
            $foto = trim($_GET['foto']);
            $id = trim($_GET['id']);
            $titulo = trim($_GET['titulo']);
            $autor = trim($_GET['autor']);
            $volume = trim($_GET['volume']);
            $capitulo = trim($_GET['capitulo']);
            $status = trim($_GET['status']);
            $genero = trim($_GET['genero']);
        ?>
        <form method="POST" action="processamento/atualizar.php" enctype="multipart/form-data">
            <div class="Div_Form">
                <div class="Div_Campos">
                    <input type="hidden" value="<?php echo$id;?>" name="id">
                    <legend>Informações do Mangá</legend>
                    <label for="manga">Título</label> 
                        <input type="text" id="manga" value="<?php echo$titulo;?>" name="titulo" required autocomplete="off">
                    <label for="aut">Autor</label> 
                        <!-- Mesmo comentario do cadastrar.php#40 -->
                        <input type="text" id="aut" value="<?php echo$autor;?>" name="autor" required autocomplete="off">
                    <label for="volu">Volume</label> 
                        <input type="number" id="volu" value="<?php echo$volume;?>" name="volume" placeholder="Opcional" autocomplete="off">
                    <!-- <label for="capi">Capítulo</label> 
                        <input type="number" id="capi" value="<?php echo$capitulo;?>" name="capitulo" placeholder="Opcional" autocomplete="off"> -->
                <!--<label for="edit">Editora</label>
                        <input type="text" id="edit" name="editora" required autocomplete="off"><br/> -->
                    <label for="opS">Status</label>
                        <select id="opSta" name="status" required autocomplete="off">
                            <option><?php echo$status;?></option>
                            <option>Completo</option>
                            <option>Lendo</option>
                            <option>Parado</option>
                            <option>Pedente</option>
                        </select>
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
                        <button type="submit">Adicionar</button>
                </div>
                <div class="fotoPrew">
                        <img id="mostrarAqui" src="../cache_upload/<?php echo$foto;?>"> 
                    <label for="esfoto"><p>Capa</p></label>
                        <input id="esfoto" type="file" accept="image/*" name="foto" onchange="mostrarImagem(event)">
                </div>  
            </div>
        </form>
    </div>
    <footer class="rodape">
        <h1>EdNoob</h1>
        <p>Tenha um maior controle sobre os seus animes e mangás,
            isto é, acompanhe tudo de mais perto atráves do EdNoob.</p>
        <div>
            <a class="Image1" href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank"></a>
            <a class="image2" href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber" title="Canal" target="_blank"></a>
        </div>
    </footer>
</body>
</html>