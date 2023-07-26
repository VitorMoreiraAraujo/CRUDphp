<?php 
	include_once "../script_formulario/banco.php";

	if (isset($_POST['btn_alterar'])) {

		$cod = mysqli_real_escape_string($con, $_POST['codigo']);
		$nome = mysqli_real_escape_string($con, $_POST['nome']);
		$sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$cpf = mysqli_real_escape_string($con, $_POST['cpf']);
		$sexo = mysqli_real_escape_string($con, $_POST['sexo']);
		$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
		$senha = mysqli_real_escape_string($con, $_POST['senha']);

		$sql = "UPDATE tbClientes SET codCli = '$cod', nome = '$nome', sobrenome = '$sobrenome', email = '$email', cpf = '$cpf', sexo = '$sexo', usuario = '$usuario', senha = '$senha'";

		if (mysqli_query($con, $sql)) {
	        echo "Alteração efetuada com sucesso";

	        header('Location: ../listar.php');
    	} else {
	        echo "A Alteração não pode ser feito ".mysqli_connect_error();

	        header('Location: ../listar.php');
    	}
		
	}
 ?>