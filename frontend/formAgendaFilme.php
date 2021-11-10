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
		<h1>Agendar Filme</h1>
        <?php
			include_once("../backend/vizualizarFilme.php");
		?>
		<form action="../backend/adicionarAgendaFilme.php" method="post">
			Id do filme: <input type="text" name="id_filme" id="id_filme"><br>
			Nick: <input type="text" name="nick" id="nick"><br>
			Data para agendamento: <input type="date" name="data_agenda_filme" id="data_agenda_filme"><br>

			<input class="links-button" type="submit" value="Agendar">
		</form>
		<br><br>
		<a class="links-button" href="dashboard.html">Voltar</a>
	</main>
</body>

</html>