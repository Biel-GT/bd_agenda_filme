<?php
	include_once "conectar.php";

	try {
        $id_filme = $_POST['id_filme'];
        $nick = $_POST['nick'];
        $data_agenda_filme = $_POST['data_agenda_filme'];
		$insert = $conectar->prepare("INSERT INTO agenda_filme (id_filme, nick, data_agenda_filme) VALUES (:id_filme, :nick, :data_agenda_filme)");
		$insert->bindParam(':id_filme', $id_filme);
        $insert->bindParam(':nick', $nick);
		$insert->bindParam(':data_agenda_filme', $data_agenda_filme);
		$insert->execute();	
		$linha = $insert->rowCount();
		if(!$linha > 0){
			echo "<script>alert('Erro ao realizar o agendamento, favor tentar novamente!')</script>";
		}
		else{
			echo "<script>alert('Agendamento realizado com sucesso!')</script>";
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
	<main>
		<a class="links-button" href="../frontend/dashboard.html">Retornar para o Dashboard</a>
	</main>

</body>

</html>