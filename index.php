<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <title>NoobPHP</title>
    <link rel="icon" href="image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="image/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu_logan"><a><img src="image/favicon-48.png">EdNoob</a></div>
        <div class="form_fundo">
            <form class="pesquisa" method="POST" action="pesquisa.php">
                <input class="pesquisa" type="text" autocomplete="off" name="pesquisa"> 
                <label for="busca" class="icon"><img src="image/search.png"></label>
                <input type="submit" id="busca" style="display: none;">   
            </form>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="php/cadastrar.php">Cadastrar</a></li>
                <li><a href="php/exibir.php">Biblioteca</a></li>
            </ul>
        </nav>
    </header>
    <div class="conteudo">
        <div>
            <p>Adicionados recentemente</p>
            <section>
                <article>
                    <img src="cache_upload/cbbac002a79529d342c9e76d0978bbd0.png">
                </article>
            </section>
        </div>
        <div>
            <p>Maiores volumes</p>
            <section>
                <article>
                    <img src="cache_upload/cbbac002a79529d342c9e76d0978bbd0.png" width="120px" height="180px">
                </article>
            </section>
        </div>
        <aside>slide</aside><!-- O slide mostrará os favoritos -->
    </div>
    <footer class="rodape">
            <h1>EdNoob</h1>
            <p>Tenha mais controle sobre os seus mangás:</p>
            <div>
                <a href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank">
                    <img src="image/github.png">
                </a>
                <a href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber" title="Canal" target="_blank">
                    <img src="image/youtube.png">   
                </a>
            </div>
    </footer>
</body>            
</html>