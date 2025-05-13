<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>

    <div class="PaginaInclusao">
        <h1>Cadastro - Inclusão</h1>

            <?php
            include_once('config.php');
            $titulo= $_POST['titulo'];
            $autor= $_POST['autor'];
            $ano_publicacao	= $_POST['ano_publicacao'];
            $genero= $_POST['genero'];
            $isbn= $_POST['isbn'];

            $sqlinsert = "INSERT INTO livros (titulo, autor, ano_publicacao	, genero, isbn) 
            VALUES ( '$titulo', '$autor', '$ano_publicacao', '$genero', '$isbn' )";
            
            if (empty($titulo)) {
                die("Não digitou o título do livro.");
            } elseif (empty($autor)) {
                die("Não digitou o autor do livro.");
            } elseif (empty($ano_publicacao)) {
                die("Não marcou o ano de publicação do livro.");
            } elseif (empty($genero)) {
                die("Não digitou o gênero do livro.");
            } elseif (empty($isbn)) {
                die("Não digitou o ISBN do livro.");
            }

            mysqli_close($conexao);
            ?>
        <br>
        <button onclick="window.location='inserir.php'">Voltar </button>
        <button onclick="window.location='consulta.php'">Consultar</button>
        <button onclick="window.location='index.php'">Inicio</button>
    </div>
    
</body>
</html>