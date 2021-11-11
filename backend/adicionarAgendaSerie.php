<?php
	include_once "conectar.php";

	try {
        $id_serie = $_POST['id_serie'];
        $nick = $_POST['nick'];
        $data_agenda_serie = $_POST['data_agenda_serie'];
		$insert = $conectar->prepare("INSERT INTO agenda_serie (id_serie, nick, data_agenda_serie) VALUES (:id_serie, :nick, :data_agenda_serie)");
		$insert->bindParam(':id_serie', $id_serie);
        $insert->bindParam(':nick', $nick);
		$insert->bindParam(':data_agenda_serie', $data_agenda_serie);
		$insert->execute();	
		$linha = $insert->rowCount();
		if(!$linha > 0){
			echo "<script>alert('Erro ao realizar o agendamento, favor tentar novamente!');
			location.href='../frontend/formAgendaSerie.php';</script>";
		}
		else{
			echo "<script>alert('Agendamento realizado com sucesso!');
			location.href='../frontend/formAgendaSerie.php';</script>";
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