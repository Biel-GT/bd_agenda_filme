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
		<h1>Página Inicial</h1>

        <!-- AGENDAMENTOS SÓ DO USUÁRIO -->
        <a href="visualizarAgenda.php">Visualizar Agendamentos</a>

        <a href="formAgendaFilme.php">Agendar filme</a>

        <a href="formAgendaSerie.php">Agendar série</a>

        <?php 
            //echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>";
        ?>

	</body>
</html>