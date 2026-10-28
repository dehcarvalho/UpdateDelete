<?php
require 'conexao.php';

$resultado = mysqli_query(
    $conexao,
    'SELECT * FROM jogos ORDER BY id'
);

$jogos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Locadora de Jogos</h1>
        <p class="sub"> 
            Selecione um jogo para editar ou excluir
        </p>

<?php if (isset($_GET["msg"]) && $_GET["msg"] == "atualizado") : ?>
    <div class="aviso ok">Jogo atualizado com sucesso!</div>
<?php endif; ?>


        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Plataforma</th>
                    <th>Ano</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos as $jogo) : ?>
                        <tr>
                            <td><?= $jogo['id'] ?></td>
                            <td><?= $jogo['titulo'] ?></td>
                            <td><?= $jogo['genero'] ?></td>
                            <td><?= $jogo['plataforma'] ?></td>
                            <td><?= $jogo['ano'] ?></td>
                            <td>R$ <?= number_format($jogo['preco'], 2, ',', '.') ?></td>
                            <td><?= $jogo['estoque'] ?></td>
                            <td class="acoes">
                                <a class="btn editar" href="editar.php?id=<?= $jogo['id'] ?>">Editar</a>
                                <a class="btn excluir" href="#">Excluir</a>
                        </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
?>