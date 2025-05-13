<!DOCTYPE html>
<html lang="pt-br">
<head> 
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>

<div class="PaginaInserir">

    <form name="produto" action="inclusao.php" method="post">
        <h1>Cadastro de Livros</h1>
        <br>
        <b>Título:</b> 
        <input type="text" name="titulo">
        <b>Autor: </b>
        <input type="text" name="autor">
        <br>
        <b>Genero:</b>
        <input type="text" name="genero"> 
        <b>Isbn:</b>
        <input type="text" name="isbn"> 
        <br>
        <br>
        <b>Data de Publicação:</b> 
        <br>
        <input type="date" name="ano_publicacao">
        <br>
        <button onclick="window.location='inclusao.php'">Cadastrar</button>
    </form>

        <button onclick="window.location='consulta.php'">Consultar</button>
        <button onclick="window.location='index.php'">Inicio</button>
</div>

</body>
</html>

