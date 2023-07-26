 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		Cadastrar
 	</title>
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
 	<h1>
 		Formulário
 	</h1>
 	<form action="actions/cadastrar_action.php" method="POST">

		<label for="cod">
			Código
		</label>
		<input type="number" name="codigo" id="cod" maxlength="3" class="form-control" required>

	 	<br><br>

		<div class="form-row">
	 		<div class="form-group col-md-6">
		 		<label for="nm">
		 			Nome
		 		</label>
		 		<input type="text" name="nome" id="nm" class="form-control" required>
	 		</div>
	 		<br><br>
	 		<div class="form-group col-md-6">
		 		<label for="sn">
		 			Sobrenome
		 		</label>
		 		<input type="text" name="sobrenome" id="sn" class="form-control" required>
	 		</div>
 		</div>
 		<br><br>

 		<label for="em">
 			Email
 		</label>
 		<input type="email" name="email" id="em" class="form-control">
 		
        <br><br>

 		<label for="cpf">
 			CPF
 		</label>
 		<input type="text" name="cpf" id="cpf" maxlength="14" class="form-control" required>
 		
              <br><br>

 		<label for="sx">
 			Sexo
 		</label>
 		<select id="sx" name="sexo" class="form-control" required>
 			<option selected disabled>
 				Selecione o sexo
 			</option>
 			<option value="F">
 				Feminino
 			</option>
 			<option value="M">
 				Masculino
 			</option>
 		</select>

 		<br><br>

 		<div class="form-row">
 			<div class="form-group col-md-6">
		 		<label for="us">
		 			Usuário
		 		</label>
		 		<input type="text" name="usuario" id="us" class="form-control" required>
 			</div>
			<br><br>
 			<div class="form-group col-md-6">
		 		<label for="sn">
		 			Senha
		 		</label>
		 		<input type="password" name="senha" id="sn" class="form-control" required>
 			</div>
 		<br><br>
 		</div>
 		<input type="submit" name="btn_enviar" value="ENVIAR" class="btn btn-primary mb-2">	
 	</form>
 	<br><br>
 	<div class="btn-group" role="group">
	 	<button type="button" class="btn btn-outline-info">
	 		<a href="login.php" target="_self">
				LOGIN
			</a>
	 	</button>
	 	<button type="button" class="btn btn-outline-info">
	 		<a href="index.php" target="_self">
				SAIR
			</a>
	 	</button>
	 	<button type="button" class="btn btn-outline-info">
			<a href="listar.php" target="_self">
				LISTA DE CLIENTES
			</a>
		</button>
	</div>
	<?php 
		include_once "bibliotecas/bibliotecaJS.php";
 	?>
 </body>
 </html>