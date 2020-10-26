<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Tabuada Simples com PHP e Bootstrap 4</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>

<body>

	<div class="jumbotron text-center">
		<h2>Tabuada de Multiplicação</h2>
		
		<p class="lead">Aprenda a tabuada de uma forma fácil, e simples. Para ver a tabuada do número 10 digite o número 10 no campo abaixo e clique em calcular</p>
	</div>

	<div class="container">
		<div class="row justify-content-center">
  			<div class="col-md-6 offset-md-2">

				<form method="post" class="form-inline">
				  	<div class="form-group mr-2">
				    	<input type="text" maxlength="10" class="form-control" name="tabuada" placeholder="Digite um número">
				  	</div>
				  	<button type="submit" class="btn btn-primary">Calcular</button>
				</form>
			</div>
		</div>
	</div>

	<?php

		$tab = 0;
		
		if(isset($_POST["tabuada"])) {
			$tab = $_POST["tabuada"];
			if(!is_numeric($tab)) {
				echo "<script>alert('O valor informado não é um número');</script>";
			}else {
				for($num = 0; $num <= 10; $num ++) {
					echo $num . 'x' . $tab . ' = ' . ($num * $tab) . '<br>';
				}
			}
		}
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	</body>

</html>