<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca</title>
</head>
<body>

<div class="PaginaConsulta">

    <h1>Consulta dos Livros Cadastrados</h1>
    <button onclick="window.location='inserir.php'">Voltar </button>
    <button onclick="window.location='index.php'">Inicio</button>
    <br>


<?php
include 'config.php';

$user = "root";
$pass = "";
$host = "localhost";
$banco = "biblioteca";

$conexao = @mysqli_connect($host,$user,$pass,$banco);

$buscar = @mysqli_query($conexao, "select * from livros");

if(!$buscar){
    die ('Query inválido: ' . @mysqli_error($conexao));
}
while($dados = @mysqli_fetch_array($buscar)){
    echo "<form>";
    echo "<b>Código: </b>" . $dados['id'] . "<br>";
    echo "<b>Título: </b>" . $dados['titulo'] . "<br>";
    echo "<b>Autor: </b>" . $dados['autor'] . "<br>";
    echo "<b>Data de publicação: </b>" . $dados['ano_publicacao'] . "<br>";
    echo "<b>Genero: </b>" . $dados['genero'] . "<br>";
    echo "<b>Isbn: </b>" . $dados['isbn'] . "<br>";
    echo "</form>";
    echo "<br>";
}

@mysqli_close($conexao);
?>

</div>

</body>
</html>