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


	</head>
	<body>
		<h1>Visualizar agendamentos</h1>

		<a href="inicial.php">Voltar</a>

		<?php
			echo "<table border='1px'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";

			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
				//FETCH ASSOC percorre todas os registros do banco de dados e retorna pra mim
				echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a href='excluir.php?id=$linha[id]'>Excluir</td></tr>";
			}

			echo "</table>";

			echo $consulta->rowCount() . " Registros Exibidos";
	
		?>

		
	</body>
</html>