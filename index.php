<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head lang="pt-BR">
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>EdTsuki</title>
    <link rel="icon" href="images/icons/favicon-16.png" sizes="16x16">
    <link rel="icon" href="images/icons/favicon-32.png" sizes="32x32">
    <link rel="icon" href="images/icons/favicon-48.png" sizes="48x48">
    <link rel='stylesheet' type='text/css' media='screen' href='styles/menu.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/index.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/rodape.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/responsividade.css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div id="tudo">
        <div class="conteudo">
            <section>
                <form action="pages/functions/entrar.php" method="POST">
                <legend>Entrar no EdTsuki</legend>
                    <input type="text" name="user" maxlength="50" placeholder="Usuário" required autocomplete="off">
                    <input type="password" maxlength="8" name="pass" placeholder="Senha" required autocomplete="off">
                    <div><button name="button" type="submit">Entrar</button><a href="pages/criar_conta.php">Criar uma conta</a></div>
                    <?php if(isset($_SESSION['msg'])){ 
                        echo"<p class='msg'> Faça o login!</p>";
                        unset($_SESSION['msg']);} ?>
                </form>
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