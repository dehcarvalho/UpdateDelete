<?php

    require 'conexao.php';

    $id = $_GET["id"] ?? 0;

    $comando = mysqli_prepare(
        $conexao,
        "SELECT * FROM jogos WHERE id = ?"
    );

    mysqli_stmt_bind_param($comando, "i", $id);
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);
    $jogo = mysqli_fetch_assoc($resultado);

    if(!$jogo) {
        die('Jogo não encontrado! <a href="index.php">Voltar</a>');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container estreito">
        <h1>Editar jogo #<?= $jogo["id"] ?></h1>

        <form method="post" action="atualizar.php">
            <input type="hidden" name="id" value="<?= $jogo["id"] ?>">

            <label>
                Título
                <input type="text" name="titulo" required
                    value="<?= $jogo["titulo"] ?>"
                />
            </label>

            <label>
                Gênero
                <input type="text" name="genero" required
                    value="<?= $jogo["genero"] ?>"
                />

            
            </label>

            <label>
                Plataforma
                <input type="text" name="plataforma" required
                    value="<?= $jogo["plataforma"] ?>"
                />
            </label>
    <div class="linha">
            <label>
                Ano
                <input type="number" name="ano" required
                    value="<?= $jogo["ano"] ?>"
                />
            </label>
            <label>
                Preço
                <input type="number" name="preco" step="0.01" min="0" required
                    value="<?= $jogo["preco"] ?>"
                />
            </label>
            <label>
                Estoque
                <input type="number" name="estoque" min="0" required
                    value="<?= $jogo["estoque"] ?>"
                />
            </label>
    </div>
    <div class="botoes">
        <a class="btn voltar" href="index.php">Voltar</a>
        <button type="submit" class="btn editar">Salvar alterações</button>
    </div>
        </form>
    </div>
</body>
</html>