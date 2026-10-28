<?php
require 'conexao.php';
// 1. Pegar os dados que vieram do formulário
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$genero = $_POST["genero"];
$plataforma = $_POST["plataforma"];
$ano = $_POST["ano"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];

// 2. Preparar o comando UPDATE
$comando = mysqli_prepare(
$conexao,
"UPDATE jogos
SET titulo = ?, genero = ?, plataforma = ?,
ano = ?, preco = ?, estoque = ?
WHERE id = ?"
);

// 3. Ligar os valores aos pontos de interrogação
mysqli_stmt_bind_param(
$comando,
"sssidii",
$titulo, $genero, $plataforma, $ano, $preco, $estoque, $id
);

// 4. Executar o comando
mysqli_stmt_execute($comando);

// 5. Voltar para a lista avisando que deu certo
header("Location: index.php?msg=atualizado");
exit;
?>

