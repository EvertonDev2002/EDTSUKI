<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Biblioteca - EdNoob</title>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/exibir.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
        <section>
            <article>
                <figure>
                    <img src="../cache_upload/4a370c5db374842851549463a9a30f45.jpg"> 
                </figure>
                <figcaption>
                <div class="Div_Text_Ilustrativo">
                    <h1>Título:</h1>
                    <p>Autor:</p>
                    <p>Volume:</p>
                    <p>Capítulo:</p>
                    <p>Editora:</p>
                    <p>Status:</p>
                    <p>Gênero:</p>
                    </div>
                    <div>
                    <h1>Título</h1>
                    <p>Autor</p>
                    <p>Volume</p>
                    <p>Capítulo</p>
                    <p>Editora</p>
                    <p>Status</p>
                    <p>Gênero</p>
                    </div>
                </figcaption>
            </article>
                <div class="Div-Icon_Op">
                    <a class="icon1" href="#"></a>
                    <button class="icon2" type="submit"></button>
                    <a class="icon3" href="#"></a>
                </div>
        </section>
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