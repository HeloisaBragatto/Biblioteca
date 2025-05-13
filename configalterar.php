<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>

<?php
            include_once('config.php');
            $id = $_POST['id'];
            $titulo= $_POST['titulo'];
            $autor= $_POST['autor'];
            $ano_publicacao	= $_POST['ano_publicacao'];
            $genero= $_POST['genero'];
            $isbn= $_POST['isbn'];;

$sqlupdate = "update livros set titulo='$titulo', autor='$autor' , ano_publicacao='$ano_publicacao'	, genero='$genero' , isbn='$isbn' WHERE id = '$id';";

$resultado = @mysqli_query($conexao, $sqlupdate);

if(!$resultado) {
    echo '<input type="button" onclick="window.location'."'inserir.php'".'; value=Voltar"><br><br>';
    die ('<br>Query Inválida:</b>' . @mysqli_error($conexao));
}
else {
    echo "Registro Alterado com Sucesso";
}
mysqli_close($conexao);
?>
<br><br>
<input type="button" onclick="window.location='alteracao.php'" value=Voltar><br><br>';


</body>
</html>