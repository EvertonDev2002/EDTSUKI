<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>NoobPHP - Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/cadastrar.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/reset.css'>
    <link rel="icon" href="../image/favicon-16.png" sizes="16x16">
    <link rel="icon" href="../image/favicon-32.png" sizes="32x32">
    <link rel="icon" href="../image/favicon-48.png" sizes="48x48">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
    <script src='../js/preview.js'></script>
</head>
<body>
    <div class="centro">
        <nav class="op">
            <ul>
                <li><a  id="cor1" href="#">Cadastrar</a></li>
                <li><a href="exibir.php">Mangás</a></li>
            </ul>
        </nav>
        <div>
            <form method="POST" action="../php/processamento/processo.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>Ed</legend>
                    <label for="manga">Título:</label> 
                        <input type="text" id="manga" name="titulo" required autocomplete="off"><br/>
                    <label for="volu">Volume:</label> 
                        <input type="text" id="volu" name="volume" required autocomplete="off"><br/>
                    <label for="aut">Autor:</label> 
                        <input type="text" id="aut" name="autor" required autocomplete="off"><br/>
                    <label for="opc">Genêro:</label>
                        <select class="op2" id="opc" name="genero" required autocomplete="off">
                            <option></option>
                            <option>Komodo</option>
                            <option>Shounen</option>
                            <option>Shoujo</option>
                            <option>Gekigá</option>
                            <option>Seinen</option>
                            <option>Josei</option>
                        </select><br/>
                    <input type="submit" value="Salvar" class="bon" name="click">
                    <div class="fotoPrew">
                        <img  id="mostrarAqui"> 
                        <div>
                            <label for="esfoto">Capa</label>
                            <input id="esfoto" type="file" accept="image/*" required name="foto"  onchange="mostrarImagem(event)">
                        </div>
                   </div> 
                </fieldset>  
            </form>
        </div>
        <div class="seta">
            <figure >
                <a href="../index.php" title="Voltar para página principal">
                <img src="../image/seta.png"  width="32px" height="32px" alt="Voltar"></a>
            <figure>
        </div>
    </div>
</body>
</html>