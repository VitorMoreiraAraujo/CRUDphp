<?php 
	include_once "../script_formulario/banco.php";

	

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($con, $_GET['id']);

		$sql = "SELECT * FROM tbClientes WHERE codCli = '$id'";

		$query = mysqli_query($con,$sql);

		$dados = mysqli_fetch_array($query);
	}
	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<?php 
		include_once "bibliotecas/bibliotecaCSS.php";
	?>
	<style>
 		h1 {
			text-align: center;
		}
 	</style>
 	<title>
 		Alterando Cliente
 	</title>
 </head>
 <body class="container">
 	<h1>
 		Alterar
 	</h1>
 	<form action="actions/alterar_action.php" method="POST">

 		<label for="cod">
 			Código
 		</label>
 		<input type="number" name="codigo" id="cod" maxlength="3" value="<?php echo $dados['codCli']; ?>" class="form-control" required>

 		<br><br>

 		<div class="form-row">
 			<div class="form-group col-md-6">
		 		<label for="nome">
		 			Nome
		 		</label>
		 		<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" class="form-control" required>
	 		</div>

	 		<div class="form-group col-md-6">
		 		<label for="sn">
		 			Sobrenome
		 		</label>
		 		<input type="text" name="sobrenome" id="sn" value="<?php echo $dados['sobrenome']; ?>" class="form-control"required>
		 	</div>
	 	</div>
 		<br><br>

 		<label for="em">
 			Email
 		</label>
 		<input type="email" name="email" id="em" value="<?php echo $dados['email']; ?>" class="form-control">
 		
        <br><br>

 		<label for="cpf">
 			CPF
 		</label>
 		<input type="text" name="cpf" id="cpf" maxlength="14" value="<?php echo $dados['cpf']; ?>"  class="form-control" required>
 		
              <br><br>

 		<label for="sx">
 			Sexo
 		</label>
 		<select id="sx" name="sexo"  class="form-control" required>
 			<?php 
 				if ($dados['sexo'] == 'M') {
 			?>
	 				<option value="<?php echo $dados['sexo']; ?>">
	 					Masculino
	 				</option>
 			<?php 

 				}
 				if ($dados['sexo'] == 'F') {
 			 ?>
	 			 	<option value="<?php echo $dados['sexo']; ?>">
	 					Feminino
	 				</option>
	 		<?php 
	 			}
	 		 ?>
 			
 		</select>

 		<br><br>
 		<div class="form-row">
 			<div class="form-group col-md-6">
		 		<label for="us">
		 			Usuário
		 		</label>
		 		<input type="text" name="usuario" id="us" value="<?php echo $dados['usuario']; ?>" class="form-control" required>
	 		</div>
	 		<div class="form-group col-md-6">
		 		<label for="sn">
		 			Senha
		 		</label>
		 		<input type="password" name="senha" id="sn" value="<?php echo $dados['senha']; ?>" class="form-control" required>
	 		</div>
 		</div>
 		<br><br>
 		<input type="submit" name="btn_alterar" value="ALTERAR" class="btn btn-primary mb-2">

 	</form>
 	<br><br>
 	<div class="btn-group" role="group">
	 	<button class="btn btn-outline-info">
	 		<a href="login.php" target="_self">
				LOGIN
			</a>
	 	</button>
	 	<button class="btn btn-outline-info">
			<a href="formulario.php" target="_self">
				CADASTRAR
			</a>
		</button>
		<button class="btn btn-outline-info">
			<a href="listar.php" target="_self">
				LISTA DE CLIENTES
			</a>
		</button>
		<button class="btn btn-outline-info">
	 		<a href="index.php" target="_self">
				SAIR
			</a>
	 	</button>
	</div>
	<?php 
		include_once "bibliotecas/bibliotecaJS.php";
 	?>
 </body>
 </html>