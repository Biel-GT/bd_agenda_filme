<?php
include_once("conectar.php");
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
<?php
	$id_serie = filter_var($_POST['id_serie'], FILTER_SANITIZE_NUMBER_INT);
	$nick = filter_var($_POST['nick']);
	$data_agenda_serie = filter_var($_POST['data_agenda_serie']);
	if(empty($_POST['Editar']))
	{	
		$empty_input = false;
		if (!$empty_input)
		{
			$query_up_Agenda_serie="UPDATE agenda_serie SET data_agenda_serie=:data_agenda_serie, id_serie=:id_serie where nick=:nick";
			$edit = $conectar->prepare($query_up_Agenda_serie);
			$edit->bindParam(':data_agenda_serie', $data_agenda_serie, PDO::PARAM_STR);
			$edit->bindParam(':nick', $nick, PDO::PARAM_STR);
			$edit->bindParam(':id_serie', $id_serie, PDO::PARAM_INT);
			$edit->execute();	
			$linha = $edit->rowCount();
			if(!$linha > 0){
				echo "<script>alert('Erro ao editar, tente novamente!');
				location.href='../frontend/visualizarAgenda.html';</script>";
			}
			else
			{
				echo "<script>alert('Editado com sucesso!');
				location.href='../frontend/visualizarAgenda.html';</script>";
			}
		}
	}
	?>
	</main>
</body> 
</html>
