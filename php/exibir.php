<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Biblioteca - EdNoob</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/exibir.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu_logan"><a href="../index.php"><img src="../image/favicon-48.png">EdNoob</a></div>
        <div class="form_fundo">
            <form class="pesquisa" method="POST" action="pesquisa.php">
                <input class="pesquisa" maxlength="50" type="text" autocomplete="off" name="pesquisa"> 
                <label for="busca" class="icon"><img src="../image/search.png"></label>
                <input type="submit" id="busca" style="display: none;">   
            </form>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="../index.php">Início</a></li>
                <li><a href="cadastrar.php">Adicionar</a></li>
                <li><a href="exibir.php">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <article>
            <figure>
                <img src="../cache_upload/3be618bd87f8bb66f0a0c37c9c9876ec.jpg"> 
            </figure>
            <figcaption>
                <h1>Título</h1>
                <p>Autor</p>
                <p>Volume</p>
                <p>Capítulo</p>
                <p>Editora</p>
                <p>Status</p>
                <p>Gênero</p>
            </figcaption>
            <span>
                <img src="../image/menu-32.png">
            </span>
        </article>
        <article>
            <figure>
                <img src="../cache_upload/3be618bd87f8bb66f0a0c37c9c9876ec.jpg"> 
            </figure>
            <figcaption>
                <h1>Título</h1>
                <p>Autor</p>
                <p>Volume</p>
                <p>Capítulo</p>
                <p>Editora</p>
                <p>Status</p>
                <p>Gênero</p>
            </figcaption>
            <span>
                <img src="../image/menu-32.png">
            </span>
        </article>
    </div>
    <footer class="rodape">
        <h1>EdNoob</h1>
        <p>Tenha mais controle sobre os seus mangás:</p>
        <div>
            <a href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank">
                <img src="../image/github.png">
            </a>
            <a href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber" title="Canal" target="_blank">
                <img src="../image/youtube.png">   
            </a>
        </div>
    </footer>
</body>
</html>