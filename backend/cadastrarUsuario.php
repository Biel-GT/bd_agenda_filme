<?php
	include_once "conectar.php";

	try {
		
		$nick = filter_var($_POST['nick']);
		$telefone = filter_var($_POST['telefone']);
		$insert = $conectar->prepare("INSERT INTO usu (nick, telefone) VALUES (:nick, :telefone)");
		$insert->bindParam(':nick', $nick);
		$insert->bindParam(':telefone', $telefone);
		$insert->execute();	
		$linha = $insert->rowCount();
		if(!$linha > 0){
			echo "<script>alert('Nick já utilizado, tente com outro Nick.');
			location.href='../frontend/formCadastroUsuario.html';</script>";
		}
		else{
			echo "<script>alert('Cadastro realizado com sucesso!');
			location.href='../frontend/formCadastroUsuario.html';</script>";
		}
    }
	catch(PDOException $e) {
		echo "Erro: " . $e->getMessage();
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
</body>

</html>