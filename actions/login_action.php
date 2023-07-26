<?php 

	include_once "../script_formulario/banco.php";

	$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
	$senha = mysqli_real_escape_string($con, $_POST['senha']);

	if (isset($_POST['entrar'])) {


		$sql = "SELECT usuario, senha FROM tbClientes WHERE usuario = '$usuario' AND senha = '$senha'";

		$verifica = mysqli_query($con, $sql);

		if ($verifica) {
			if (mysqli_num_rows($verifica) <= 0) {
				echo "Login incorreto".mysqli_connect_error();
        		header('Location: ../login.php');
			}else {
				echo "Login efetuado com sucesso";
        		header('Location: ../tela_inicial.php');
			}
			
    	} else {
        	echo "Erro ao logar".mysqli_connect_error();
        	header('Location: ../login.php');
    	}
		

	}

 ?>