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
		/*.meio {
			width: 1px;
			height: 100%;
			border: solid black;
			margin-left: 50%;
			position: relative;
			z-index: 1;
		}
		*/
	</style>
	<title>
		Inicial
	</title>
</head>
<body>
	<!-- <div class="meio"></div> -->
	<div class="container">
		<h1>Bem-vindo ao sistema!!!!</h1>
		<div class="button">
			<div class="itens" class="btn-group" role="group">
				<button type="button" class="btn btn-outline-info">
				<a href="cadastrar.php" target="_self">
					CADASTRAR
				</a>
			</button>
			<button type="button" class="btn btn-outline-info">
				<a href="login.php" target="_self">
					LOGIN
				</a>	
			</button>
			<button type="button" class="btn btn-outline-info">
				<a href="listar.php" target="_self">
					LISTA DE CLIENTES
				</a>	
			</button>
			</div>
		</div>
	</div>
<?php 
	include_once "bibliotecas/bibliotecaJS.php";
 ?>
</body>
</html>
