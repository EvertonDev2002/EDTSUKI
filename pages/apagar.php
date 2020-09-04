<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Biblioteca - EdTsuki</title>
    <link rel="icon" href="../images/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../images/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../images/icons/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/apagar.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
    <div id="tudo">
    <header class="menu">
        <div><a href="inicio.php">EdTsuki</a></div>
        <div>
            <form method="POST" action="pesquisa.php">
                <input maxlength="50" type="text" autocomplete="off" name="pesquisa">
                <button type="submit" name="pesquisar"></button>
            </form>
        </div>
        <nav>
            <ul>
                <li><a href="inicio.php">Início</a></li>
                <li><a href="cadastrar.php">Adicionar</a></li>
                <li><a href="exibir.php">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <?php
        /* Receber número da página */
        $page_atual = filter_input(INPUT_GET,'page',FILTER_VALIDATE_INT);
        $page = (!empty($page_atual)) ? $page_atual : 1;
        /* Setar a quantidade de itens por página */
        $quantidade = 10;
        /* Calcular o início da vizualização */
        $inicio = ($quantidade * $page) - $quantidade;
        include_once("functions/conexao.php");$code = "SELECT * FROM mangas LIMIT $inicio, $quantidade";$resul = mysqli_query($ed, $code);      
        if($resul){
            while( $row = mysqli_fetch_array($resul)){?>
        <section>
            <article>
                <figure>
                    <img src="../images/img/<?php echo $row['arquivo']?>">
                </figure>
                <figcaption>
                    <div class="Div_Text_Ilustrativo">
                        <h1>Título:</h1>
                        <p>Autor:</p>
                        <?php 
                    if(($row['volume']) and ($row['capitulo'])){ }elseif($row['capitulo']){echo"<p>Capitulo:</p>";}elseif($row['volume']){echo"<p>Volume:</p>";}?>
                        <!-- <p>Editora:</p> -->
                        <p>Status:</p>
                        <p>Gênero:</p>
                    </div>
                    <div class="Div_Text">
                        <h1 title="<?php echo $row['nome']?>"><?php echo $row['nome']?></h1>
                        <p><?php echo $row['autor']?></p>
                        <p><?php echo $row['volume']?></p>
                        <p><?php echo $row['capitulo']?></p>
                        <!-- <p>Editora</p> -->
                        <p><?php echo $row['statush']?></p>
                        <p><?php echo $row['genero']?></p>
                    </div>
                </figcaption>
            </article>
            <div class="Div-Icon">
                <!-- Botão para editar -->
                <a class="icon icon1" href="editar.php?id=<?php echo $row['id']?>&foto=<?php echo $row['arquivo']?>&titulo=<?php echo $row['nome']?>&autor=<?php echo $row['autor']?>&volume=<?php echo $row['volume']?>&capitulo=<?php echo $row['capitulo']?>&status=<?php echo $row['statush']?>&genero=<?php echo $row['genero']?>"></a>
                <!-- Botão para apagar -->
                <a class="icon icon2" href="apagar.php"></a>
                <!-- Botão para adicionar aos favoritos -->
                <a class="<?php if($row['favoritos'] == 0){echo"icon icon3";}else{echo"icon icon4";}?>"href="functions/favorita.php?ed=<?php echo $row['id']?>&f=<?php echo $row['favoritos']?>"></a>
            </div>
        </section>
        <?php       
            }
        }
        $codeID1 = trim($_GET['id']);
        $nome = trim($_GET['nome']);
        ?>
    </div>
    <div class="Div_links">
        <?php
        /* Consultando banco para saber o total de páginas */
        $page_resul = "SELECT COUNT(id) num_result FROM mangas";
        $result_page = mysqli_query($ed,$page_resul);
        $row_page = mysqli_fetch_assoc($result_page);
        /* Dividindo */
        $quantidade_page = ceil($row_page['num_result'] / $quantidade);
        /* Limitar os links antes e depois */
        $max_links = 2;
        echo"<a href='exibir.php?page=1'>Início</a>";
        for($page_antes = $page_atual - $max_links; $page_antes <= $page_atual - 1; $page_antes++){
            if($page_antes >= 1){
                echo"<a href='exibir.php?page=$page_antes'>$page_antes</a>";
            }
        }
        echo"<a href='#'>$page_atual</a>";
        for($page_depois = $page_atual + 1; $page_depois <= $page_atual + $max_links; $page_depois++){
            if($page_depois <= $quantidade_page){
                echo"<a href='exibir.php?page=$page_depois'>$page_depois</a>";
            }
        }
        echo"<a href='exibir.php?page=$quantidade_page'>Última</a>";
        ?>
    </div>
    <div class="modal-tudo">
            <div class="modal">
                <h3>Deseja excluir <?php echo $nome?>?</h3>
                <div class="modal-ops">
                    <a  class="link2" href="processamento/deletar.php?d=<?php echo $codeID1?>">Sim!</a>
                    <a class="link1" href="exibir.php?page=<?php echo$page_atual?>">Não!</a>
            </div>
        </div>
    </div>
    <footer class="rodape">
        <h1>EdTsuki</h1>
        <p>Tenha um maior controle sobre os seus animes e mangás</p>
        <div>
            <a class="Image1" href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank"></a>
            <a class="image2" href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber"
                title="Canal" target="_blank"></a>
        </div>
    </footer>
    </div>
</body>
</html>