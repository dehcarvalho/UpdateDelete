<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'locadora';

try {
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
} catch (mysqli_sql_exception $excecao) {
    die('Erro ao se conectar com o banco: ' . $excecao->getMessage());
}

?>