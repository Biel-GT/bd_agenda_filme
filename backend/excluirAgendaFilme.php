<?php
include_once "conectar.php";
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	
$query_del_agenda_filme="DELETE FROM agenda_filme where id_agenda_filme = $id";
$apagar_agenda_filme = $conectar->prepare($query_del_agenda_filme);
$apagar_agenda_filme->execute();
$linha = $apagar_agenda_filme->rowCount();
if($linha > 0)
{
	echo "<script>alert('Agendamento excluído com sucesso!');
	location.href='vizualizarAgendaFilmes.php';</script>";
}
else{
	echo "<script>alert('Falha ao excluir agendamento, tente novamente!');
	location.href='vizualizarAgendaFilmes.php';</script>";
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