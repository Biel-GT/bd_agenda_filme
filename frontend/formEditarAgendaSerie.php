<?php
/*include_once "../backend/editar.php";

//FILTER_SANITIZE_NUMBER_INT função que só aceita int
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
*/
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
				<a href="index.html">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
		<h1>Editar Agenda de Série</h1>
		<?php
			include_once("../backend/vizualizarSerie.php");
		?>
		<form action="../backend/editarAgendaSerie.php" method="post">
			Id da série: <input type="text" name="id_serie" id="id_serie"><br>
			Nick: <input type="text" name="nick" id="nick"><br>
			Data para agendamento: <input type="date" name="data_agenda_serie" id="data_agenda_serie"><br>

			<input class="links-button" type="submit" value="Editar">
		</form>
		<br><br>
		<a class="links-button" href="dashboard.html">Voltar</a>
	</main>
</body>

</html>