<?php 
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "dbFormulario";

	$con = mysqli_connect($host, $usuario, $senha, $banco);

	mysqli_set_charset($con, "utf8");

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar o banco de dados.". mysqli_connect_error();
	}
 ?>