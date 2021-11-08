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
                $nick = $_POST['nick'];
                $select = /*$conectar->query(*/"SELECT * FROM usu WHERE nick =:nick"/*)*/;
                $query = $conectar->prepare($select);
                $query->bindParam(':nick', $nick, PDO::PARAM_STR);
                $query->execute();
               
                echo "<table border='1px'><tr><td>Nick</td><td>Telefone</td><td>Agenda Filme</td><td>Agenda Série</td></tr>";
        
                while($linha = $query->fetch()) {
                    print_r("<tr><td>$linha[nick]</td><td>$linha[telefone]</td><td><a href='vizualizarAgendaFilmes'>Vizualizar agendamentos</a></td><td><a href='vizualizarAgendaSeries'>Vizualizar agendamentos</a></td></tr>");
                    
                }
        
                echo "</table><br>";

                echo "<br>" . $query->rowCount() . " Registros Exibidos<br><br>";
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        ?>
        <a class="links-button" href="../frontend/visualizarAgenda.html">Voltar</a>
	</main>

</body>

</html>