<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
<form name="produto" action="veralteracao.php" method="post">
        <h1>Alteração de Livros</h1>
        <b>Código:</b> <input type="number" name="id">
        <input type="submit" onclick="window.location.href='veralteracao.php'" value="Ok">
        <input type="reset" value="Limpar">
        <input type="button" onclick="window.location.href='inserir.php'" value="Voltar">
    </form>
</body>
</html>