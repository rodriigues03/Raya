<?php

$hostname = "localhost";
$banco = "cliques";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($hostname, $usuario, $senha, $banco);

if (!$conexao) {

    die("Erro na conexão: " . mysqli_connect_error());
    
}
?>
