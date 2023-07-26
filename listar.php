<?php 
	include_once "script_formulario/banco.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>
			Lista de Clientes
		</title>
		<?php 
			include_once "bibliotecas/bibliotecaCSS.php";
		?>
	</head>
	<body class="container">
		<h1>
			Clientes
		</h1>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">
						Código
					</th>

					<th scope="col">
						Nome
					</th>

					<th>
						Sobrenome
					</th>

					<th scope="col">
						Email
					</th>

					<th scope="col">
						CPF
					</th>

					<th scope="col">
						Sexo
					</th>

					<th scope="col">
						Usuário
					</th>

					<th scope="col">
						Senha
					</th>

					<th scope="col">
						
					</th>
					<th scope="col">
						
					</th>
				</tr>
			</thead>
		
		<?php 

			$sql = "SELECT * FROM tbClientes";

			$query = mysqli_query($con, $sql);
			

			while ($dados = mysqli_fetch_array($query)) {

		 ?>
		<tbody>
		 		<tr>
		 			
		 			<th scope="row">
		 				<?php 
		 					echo $dados['codCli'];
		 				 ?>
		 			</th>
		 			<td>
		 				<?php 
		 					echo $dados['nome'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					echo $dados['sobrenome'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					echo $dados['email'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					echo $dados['cpf'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					echo $dados['sexo'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					echo $dados['usuario'];
		 				 ?>
		 			</td>
		 			<td>
		 				<?php 
		 					$sn = $dados['senha'];
		 					$senha = str_replace($sn, "*****", $sn);
		 					echo $senha;
		 				 ?>
		 			</td>

		 			<td>
		 				<button class="btn btn-outline-info">
			 				<a href="alterar.php?id=<?php echo $dados['codCli'];?>">
			 					alterar
			 				</a>	
		 				</button>
		 			</td>

		 			<td>
		 				<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalExcluir">
		 					<a href="#modalExcluir">
		 						excluir
		 					</a>
		 				</button>
		 			</td>
		 		</tr>
		 		<!-- Modal -->
			<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="excluirModalLabel">Excluir</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">	
					<p>
						Deseja excluir <?php echo $dados['nome']; ?> ?
					</p>
			      </div>
			      <div class="modal-footer">
			      	<form action="excluir_action.php" method="POST">
			      		<input type="hidden" name="codigo" value="<?php echo $dados['codCli']; ?>">
			      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			        	<button type="submit" name="btn_excluir" class="btn btn-primary">Excluir</button>
			      	</form>
			        
			      </div>
			    </div>
			  </div>
			</div>
		</tbody>
		 		
		 <?php 
		 	}

		  ?>
	</table>
	
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