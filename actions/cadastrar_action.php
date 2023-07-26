<?php 
include_once "../script_formulario/banco.php";


if (isset($_POST['btn_enviar'])) {

	$cod = mysqli_real_escape_string($con, $_POST['codigo']);
	$nome = mysqli_real_escape_string($con, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$cpf = mysqli_real_escape_string($con, $_POST['cpf']);
	$sexo = mysqli_real_escape_string($con, $_POST['sexo']);
	$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
	$senha = mysqli_real_escape_string($con, $_POST['senha']);
    
    $sql = "INSERT INTO tbClientes(codCli,nome,sobrenome,email,cpf,sexo,usuario,senha) VALUES('$cod','$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

    if (mysqli_query($con, $sql)) {

        echo "Cadastro efetuado com sucesso";

        header('Location: ../tela_inicial.php');
    } else {

        echo "O cadastro não pode ser feito ".mysqli_connect_error();
        
        header('Location: ../login.php');
    }
}





 ?>