<?php

$botao = "Assistir_trailer";

$conexao = mysqli_connect("localhost", "rodriigues03", "Tech_2803@", "cliques");

if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

$condicao = true;

if ($condicao) {

    $sql = "INSERT INTO cliques (botao) VALUES ('$botao')";
    
    if (mysqli_query($conexao, $sql)) {

        echo "Clique registrado com sucesso!";

    } else {

        echo "Erro ao registrar o clique: " . mysqli_error($conexao);
    }

} else {

    echo "A condição não é verdadeira. Não foi registrado nenhum clique.";

}

mysqli_close($conexao);

?>
