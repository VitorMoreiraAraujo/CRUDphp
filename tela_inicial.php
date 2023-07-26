<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Sistema</title>
 	<?php
		include_once "bibliotecas/bibliotecaCSS.php";
 	?>
 	<style>
 		h1 {
			text-align: center;
		}
		.button {
			height: 20px;
			position: relative;
			
		}
		.itens {
			position: absolute;
			top: 1%;
			left: 35%;
		}
		.itens button a {
			text-decoration: none;
		}
 	</style>
</head>
<body class="container">
 	<h1>
 		Bem-vindo, você está por dentro do nosso sistema
 	</h1>
 	<div class="button">
	 	<div class="itens" class="btn-group" role="group">
		 	<button class="btn btn-outline-info">
		 		<a href="cadastrar.php" target="_self">
					CADASTRAR
				</a>	
		 	</button>

		 	<button class="btn btn-outline-info" class="itens">
		 		<a href="login.php" target="_self">
					LOGIN
				</a>
		 	</button>

		 	<button class="btn btn-outline-info">
				<a href="listar.php" target="_self">
					LISTA DE CLIENTES
				</a>
			</button>
		 	
		 	<button class="btn btn-outline-info">
		 		<a href="index.php" target="_self">
					INICIO
				</a>
		 	</button>
	 	</div>
 	</div>
 	<?php
		include_once "bibliotecas/bibliotecaJS.php";
 	?>
</body>
</html>