<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Cadastro - EdNoob</title>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/cadastrar.css'>
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
            <form method="POST" action="../php/processamento/processo.php" enctype="multipart/form-data">
                <legend>Informações do Mangá</legend>
                <label for="manga">Título</label> 
                    <input type="text" id="manga" name="titulo" required autocomplete="off"><br/>
                <label for="aut">Autor</label> 
                    <input type="text" id="aut" name="autor" required autocomplete="off"><br/>
                <label for="volu">Volume</label> 
                    <input type="number" id="volu" name="volume" placeholder="Opcional" autocomplete="off"><br/>
                <label for="capi">Capítulo</label> 
                    <input type="number" id="capi" name="capitulo" placeholder="Opcional" autocomplete="off"><br/>
                <label for="manga">Editora</label> 
                    <input type="text" id="manga" name="editora" required autocomplete="off"><br/>
                <label for="opS">Status</label>
                    <select id="opSta" name="status" required autocomplete="off">
                        <option></option>
                        <option>Completo</option>
                        <option>Lendo</option>
                        <option>Parado</option>
                        <option>Pedente</option>
                    </select><br/>
                <label for="opG">Gênero</label>
                    <select id="opG" name="genero" required autocomplete="off">
                        <option></option>
                        <option>Komodo</option>
                        <option>Shounen</option>
                        <option>Shoujo</option>
                        <option>Gekigá</option>
                        <option>Seinen</option>
                        <option>Josei</option>
                    </select><br/>
                    <button type="submit">Adicionar</button>
                <div class="fotoPrew">
                        <img id="mostrarAqui"> 
                    <label for="esfoto"><p>Capa</p></label>
                        <input id="esfoto" type="file" accept="image/*" required name="foto" onchange="mostrarImagem(event)">
                </div>  
            </form>
    </div>
    <footer class="rodape">
        <h1>EdNoob</h1>
        <p>Tenha mais controle sobre os seus mangás</p>
        <div>
            <a class="Image1" href="https://github.com/Edward04007/EdNoob" title="@Edward04007" target="_blank"></a>
            <a class="image2" href="https://www.youtube.com/channel/UCWmUztmWBOuE7zhGHkwa_Zw?view_as=subscriber" title="Canal" target="_blank"></a>
        </div>
    </footer>
</body>
</html>