<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<?php 
		include_once "bibliotecas/bibliotecaCSS.php";
 	?>
 	<style>
 		h1 {
			text-align: center;
		}
		button a {
			text-decoration: none;
		}
 	</style>
</head>
<body class="container">
	<h1>Login</h1>

	<form action="actions/login_action.php" method="POST">
		<label for="us">
			Usuário
		</label>
		<input type="text" name="usuario" id="us" required class="form-control">

		<br><br>

		<label for="sn">
			Senha
		</label>
		<input type="password" name="senha" id="sn" required class="form-control">

		<br><br>

		<input type="submit" name="entrar" value="ENTRAR" class="btn btn-primary mb-2">
	</form>

	<br><br>
	
	<div class="btn-group" role="group">
		<button class="btn btn-outline-info">
			<a href="cadastrar.php" target="_self">
				CADASTRAR
			</a>
		</button>

		<button class="btn btn-outline-info">
			<a href="listar.php" target="_self">
				LISTA DE CLIENTES
			</a>
		</button class="btn btn-outline-info">
		
		<button class="btn btn-outline-info">
			<a href="index.php" target="_self">
				INICIO
			</a>
		</button>
	</div>
	<?php 
		include_once "bibliotecas/bibliotecaJS.php";
 	?>
</body>
</html>