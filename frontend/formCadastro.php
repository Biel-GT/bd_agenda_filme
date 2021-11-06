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
				<a href="inicial.php">
					<img src="../src/img/img-navbar.png" alt="">
				</a>
			</nav>
		</div>
	</div>
	<main>
		<h1>Cadastro</h1>
		<form action="../backend/cadastrar.php" method="post">
			Nome: <input type="text" name="nome_usu" id="nome_usu"><br>
			Sobrenome: <input type="text" name="sobrenome_usu" id="sobrenome_usu"><br>
			Email: <input type="text" name="email_usu" id="email_usu"><br>
			Senha: <input type="text" name="senha_usu" id="senha_usu"><br>
			Repita a senha: <input type="text" name="rsenha_usu" id="rsenha_usu"><br>
			Telefone: <input type="text" name="telefone_usu" id="telefone_usu"><br>
			<input type="submit" value="Cadastrar">
		</form>
	</main>
</body>

</html>