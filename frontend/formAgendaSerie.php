<?php
include_once "../backend/conectar.php";

try {

	//Execução da instrução sql
	$conexao = $conectar;

	/*echo "<table border='1px'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";

		while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
			//FETCH ASSOC percorre todas os registros do banco de dados e retorna pra mim

			echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</td></tr>";
		}

		echo "</table>";

		echo $consulta->rowCount() . " Registros Exibidos";*/
} catch (PDOException $e) {

	echo $e->getMessage();
}
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
				<a href="index.php">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
		<h1>Agendar Serie</h1>
		<form action="../backend/adicionarAgendaSerie.php" method="post">
			Nome da Serie: <input type="text" name="nome_serie" id="nome_serie"><br>
			Gênero: <input type="text" name="genero_serie" id="genero_serie"><br>
			Descrição: <input type="text" name="desc_serie" id="desc_serie"><br>
			Data para agendamento: <input type="date" name="data_agenda_serie" id="data_agenda_serie"><br>

			<input type="submit" value="Agendar">
		</form>

		<a href="index.php">Voltar</a>
	</main>
</body>

</html>