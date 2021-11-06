<?php
include_once "arquivos_php/conexão.php";

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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>
	<div class="navBar">
		<div class="container">
			<nav>
				<a href="inicial.php">
					<img src="img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
		<h1>Agendar Filme</h1>
		<form action="arquivos_php/cadastrar.php" method="post">
			Nome do filme: <input type="text" name="nome_filme" id="nome_filme"><br>
			Gênero: <input type="text" name="genero_filme" id="genero_filme"><br>
			Descrição: <input type="text" name="desc_filme" id="desc_filme"><br>
			Data para agendamento: <input type="date" name="data_agenda_filme" id="data_agenda_filme"><br>

			<input type="submit" value="Agendar">
		</form>

		<a href="inicial.php">Voltar</a>
	</main>
</body>

</html>