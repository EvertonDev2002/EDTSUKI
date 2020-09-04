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
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/cadastrar.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src='../scripts/preview.js'></script>
</head>
<body>
 <div id="tudo">
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
                <li><a href="exibir.php?page=1">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <div class="Div-sub">
            <form method="POST" action="functions/processo.php" enctype="multipart/form-data">
                <div class="Div_Form">
                        <div class="Div_Campos">
                                <legend>Informações do Mangá</legend>
                            <div>
                                <label for="manga">Título</label> 
                                    <input type="text" id="manga" name="titulo" required autocomplete="off">
                            </div>
                            <div>
                                <label for="aut">Autor</label> 
                                    <input type="text" id="aut" name="autor" required autocomplete="off">
                            </div>
                            <div>
                                <label for="volu">Volume</label> 
                                        <input type="number" id="volu" name="volume" autocomplete="off" placeholder="Opicional">
                            </div>
                            <div>
                                <label for="capi">Capítulo</label> 
                                    <input type="number" id="capi" name="capitulo" autocomplete="off" placeholder="Opicional">
                            </div>
                            <!-- <div>
                                <label for="edit">Editora</label>
                                <input type="text" id="edit" name="editora" required autocomplete="off"><br/>
                            </div> -->
                    <div>
                        <label for="opS">Status</label>
                            <select id="opSta" name="status" required autocomplete="off">
                                <option></option>
                                <option>Completo</option>
                                <option>Lendo</option>
                                <option>Parado</option>
                                <option>Pedente</option>
                            </select>
                    </div>
                        <div>
                        <label for="opG">Gênero</label>
                                <select id="opG" name="genero" required autocomplete="off">
                                    <option></option>
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
                                <img id="mostrarAqui"> 
                            <label for="esfoto"><p>Capa</p></label>
                                <input style="display: none;" id="esfoto" type="file" accept="image/*" name="foto" onchange="mostrarImagem(event)">
                        </div>  
                    </div>  
                </form>
                <section>
                    <div class="Div-text">
                        <p>Adicionados</p>
                    </div>
                    <div class="Div-Overflow">
                    <?php include_once("functions/conexao.php");
                    $code = "SELECT * FROM mangas ORDER BY id DESC";
                    $resul = mysqli_query($ed, $code);
                    if($resul){
                        while($row = mysqli_fetch_array($resul)){?>
                        <article>
                            <img src="../images/img/<?php echo $row['arquivo']?>">
                            <legend title="<?php echo $row['nome']?>"><?php echo $row['nome']?></legend>
                        </article>
                        <?php
                        }
                    }
                    ?> 
                    </div>
                </section>
            </div>
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