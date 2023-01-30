<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $titulo ?></title>

    <style>
        .tabela{
            width: 500px;
        }

        .tabela, .tabela td, .tabela tr{
            border: 1px solid;
        }

    </style>
</head>
<body>
    <h2><?php echo $titulo ?></h2>
    <p><a href="<?php echo base_url('categorias/inserir') ?>">+Inserir Nova Categoria</a></p>
    <table class="tabela">
        <tr>
            <td>Código da Categoria </td>
            <td>Nome da Categoria</td>
        </tr>
        <?php foreach ($categorias as $categoria) : ?>
        <tr>
            <td><?php echo $categoria->id ?></td>
            <td><?php echo $categoria->nomecategoria ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>