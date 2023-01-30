<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>
</head>
<body>
    <h2><?php echo $titulo ?></h2>
    <strong><?php echo $msg ?></strong>
    <form method="post">
        <p>Nome da Categoria: <input type="text" name="nomecategoria"></p>
        <input type="submit" value="<?php echo $acao?>">
    </form>
</body>
</html>