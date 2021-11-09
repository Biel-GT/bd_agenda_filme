<?php
    include_once('conectar.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">

</head>

<body>
	<div class="navBar">
		<div class="container">
			<nav>
				<a href="../frontend/index.html">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
        <?php
            try {
                //echo $_COOKIE['nick']."<br><br>";
                $nick = $_COOKIE['nick'];
                $agendaSerie = "SELECT * FROM agenda_serie INNER JOIN serie ON agenda_serie.id_serie = serie.id_serie WHERE nick=:nick";
                $query = $conectar->prepare($agendaSerie);
                $query->bindParam(':nick', $nick, PDO::PARAM_STR);
                $query->execute();
                $contagem = $query->rowCount();
                if($contagem > 0){
                    echo "Foram encontrados agendamentos para $nick.<br><br>";
                    echo "<table border='1px'><tr><td>Nick</td><td>Filme</td><td>Data agendada</td></tr>";
                    while($linha = $query->fetch()) {
                        print_r("<tr><td>$linha[nick]</td><td>$linha[nome_serie]</td><td>$linha[data_agenda_serie]</td></tr>");   
                    }
                    echo "</table><br>";
                    echo "<br>" . $contagem . " Agendamentos<br><br>";
                }
                else{
                    echo "Não foram encontrados registros, favor realizar seu agendamento.<br><br>";
                } 
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        ?>
        <a class="links-button" href="../frontend/visualizarAgenda.html">Voltar</a>
	</main>

</body>

</html>