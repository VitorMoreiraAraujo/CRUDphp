<?php 
	include_once "../script_formulario/banco.php";

	if (isset($_POST['btn_excluir'])) {

		$cod = mysqli_real_escape_string($con, $_POST['codigo']);

		$sql = "DELETE FROM tbClientes WHERE codCli = '$cod'";

		if (mysqli_query($con, $sql)) {
	        echo "Excluido com sucesso";

	        header('Location: ../listar.php');
    	} else {
	        echo "Erro, o cliente não pôde ser excluido ".mysqli_connect_error();

	        header('Location: ../login.php');
    	}
		
	}
 ?>