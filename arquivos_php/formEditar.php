<?php
	include_once "conexão.php";

	//FILTER_SANITIZE_NUMBER_INT função que só aceita int
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post">
Nome: <input type="text" name="nome" value="<?php echo $linha['nome']?>" id="nome"><br>
Login: <input type="text" name="login" value="<?php echo $linha['login']?>" id="login"><br>
<input type="hidden" name="id" value="<?php echo $linha['id']?>">
<input type="submit" value="Editar">
</form>