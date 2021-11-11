<?php
	try {
		//Faz conexão com o BD
		$conectar = new PDO("mysql:host=localhost;port=3306;dbname=bd_agenda;", "root", "");
	} catch (PDOException $e) {
		//Caso ocorra algum erro na conexão com o banco exibe a mensagem
		echo "Falha na conexão com o banco de dados: " . $e->getMessage();	
	}
?>