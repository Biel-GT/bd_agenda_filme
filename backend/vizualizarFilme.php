<?php
include_once('conectar.php');
try {
    $filmes = "SELECT * FROM filmes";
    $query = $conectar->prepare($filmes);
    $query->execute();
    $contagem = $query->rowCount();
    if ($contagem > 0) {
        echo "Filmes disponíveis para agendamento.<br><br>";
        echo "<table border='1px'><tr><td>ID Filme</td><td>Filme</td><td>Gênero</td><td>Descrição</td></tr>";
        while ($linha = $query->fetch()) {
            print_r("<tr><td>$linha[id_filme]</td><td>$linha[nome_filme]</td><td>$linha[genero_filme]</td><td>$linha[desc_filme]...</td></tr>");
        }
        echo "</table><br>";
        echo "<br>" . $contagem . " Filmes<br><br>";
    } else {
        echo "Não foram encontrados filmes disponíveis, favor tentar mais tarde.<br><br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>