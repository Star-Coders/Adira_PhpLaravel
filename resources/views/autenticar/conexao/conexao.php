<?php
// Configurações do banco de dados
$host = "starcodes.cxiwqskqcvi7.sa-east-1.rds.amazonaws.com";
$usuario = "fkvNaUF5aD4";
$senha = "d4FAdgj6a3";
$banco = "BRUNO";

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
