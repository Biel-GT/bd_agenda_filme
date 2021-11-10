<?php
include_once('conectar.php');
try {
    $serie = "SELECT * FROM serie";
    $query = $conectar->prepare($serie);
    $query->execute();
    $contagem = $query->rowCount();
    if ($contagem > 0) {
        echo "Séries disponíveis para agendamento.<br><br>";
        echo "<table border='1px'><tr><td>ID Série</td><td>Série</td><td>Gênero</td><td>Descrição</td></tr>";
        while ($linha = $query->fetch()) {
            print_r("<tr><td>$linha[id_serie]</td><td>$linha[nome_serie]</td><td>$linha[genero_serie]</td><td>$linha[desc_serie]...</td></tr>");
        }
        echo "</table><br>";
        echo "<br>" . $contagem . " Séries<br><br>";
    } else {
        echo "Não foram encontrados séries disponíveis, favor tentar mais tarde.<br><br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>