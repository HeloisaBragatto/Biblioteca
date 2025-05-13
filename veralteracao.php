<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>

    <form action="alteracao.php" method="post">
        <h1>Altearar</h1>
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
            <button type="reset">Alterar</button>
        </form>

        <button onclick="window.location='consulta.php'">Consultar</button>
            <button onclick="window.location='index.php'">Inicio</button>
</body>
</html>
<?php
 include_once('configalterar.php');

 $id=$_POST['id'];
 $titulo= $_POST['titulo'];
 $autor= $_POST['autor'];
 $ano_publicacao= $_POST['ano_publicacao'];
 $genero= $_POST['genero'];
 $isbn= $_POST['isbn'];

 $sqlconsulta="select * from livros where id=$id";

 $resultado = @mysqli_query($conexao, $sqlconsulta);

 if(!$resultado) {
    echo '<input type="button" onclick="window.location'."'inserir.php'".'; value=Voltar"><br><br>';
    die ('<br>Query Inválida:</b>' . @mysqi_error($conexao));
}
else {
    $num = @mysqli_num_rows($resultado);
    if($num==0){
        echo "<b>Código= </b>nao localizado !!!!<br><br>";
        echo '<input type="button" onclick="window.location'."'alterar.php'".'; value=Voltar"><br><br>';
        exit;
    }
    else {
        $dados=mysqli_fetch_erray($resultado);
    }
}
mysqli_close($conexao);
?>




