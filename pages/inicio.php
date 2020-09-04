<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>EdTsuki</title>
    <link rel="icon" href="../images/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../images/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../images/icons/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/responsividade.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
            <section>
                <div class="Div-text">
                    <p>Favoritos</p>
                </div>
                <div class="Div-Overflow">
                <?php include_once("functions/conexao.php");
                $code = "SELECT * FROM mangas WHERE favoritos";
                $resul = mysqli_query($ed, $code);
                if($resul){
                    while($row = mysqli_fetch_array($resul)){?>
                    <article>
                        <img src="../images/img/<?php echo $row['arquivo']?>"">
                        <legend title="<?php echo $row['nome']?>"><?php echo $row['nome']?></legend>
                    </article>
                    <?php 
                }
            }
                ?> 
                </div>
            </section>
            <section>
                <div class="Div-text">
                    <p>Adicionados recentemente</p>
                </div>
                <div class="Div-Overflow">
                <?php $code = "SELECT * FROM mangas ORDER BY id DESC";
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
            <section>
                <div>
                    <p>Lendo</p>
                </div>
                <div class="Div-Overflow">
                <?php
                $code = "SELECT * FROM mangas WHERE statush = 'Lendo'";
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
            <section>
                <div>
                    <p>Pedentes</p>
                </div>
                <div class="Div-Overflow">
                <?php
                $code = "SELECT * FROM mangas WHERE statush = 'Pedente'";
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
            <section>
                <div>
                    <p>Parados</p>
                </div>
                <div class="Div-Overflow">
                <?php
                $code = "SELECT * FROM mangas WHERE statush = 'Parado'";
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
            <section>
                <div>
                    <p>Completos</p>
                </div>
                <div class="Div-Overflow">
                <?php 
                $code = "SELECT * FROM mangas WHERE statush = 'Completo'";
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