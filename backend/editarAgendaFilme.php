<?php
/*
include_once "conectar.php";

try {
	$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
	$nome = filter_var($_POST['nome']);
	$login = filter_var($_POST['login']);

	$update = $conectar->prepare("UPDATE login SET nome = :nome, login = :login WHERE id = :id");
	$update->bindParam(':id', $id);
	$update->bindParam(':nome', $nome);
	$update->bindParam(':login', $login);
	$update->execute();

	header("location: ../frontend/index.php");

} catch (PDOException $e) {

	echo "Erro: " . $e->getMessage();;
	
}
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
				<a href="../frontend/index.html">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
	</main>
</body>
</html>
