<?php
include_once "../backend/editar.php";

//FILTER_SANITIZE_NUMBER_INT função que só aceita int
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>
	<div class="navBar">
		<div class="container">
			<nav>
				<a href="inicial.php">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
		<h1>Editar Agenda de Filme</h1>
		<form action="../backend/editarAgendaFilme.php" method="post">
			Nome: <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"><br>
			Login: <input type="text" name="login" value="<?php echo $linha['login'] ?>" id="login"><br>
			<input type="hidden" name="id" value="<?php echo $linha['id'] ?>">
			<input type="submit" value="Editar">
		</form>
	</main>
</body>

</html>