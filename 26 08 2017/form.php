<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calculadora 2.mil</title>
</head>
<body> 
	<h2>Calculadora 2.mil</h2> 
	<div style="width: 200px;">
		<?php 
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		$o = $_GET["ope"];

		switch ($o) {
			case 1:
				$resl = $num1 + $num2;
				echo "O resultado do calculo é : " . $resl;
				break;
			case 2:
				$resl = $num1 - $num2;
				echo "O resultado do calculo é : " . $resl;
				break;
			case 3:
				$resl = $num1 * $num2;
				echo "O resultado do calculo é : " . $resl;
				break;
			case 4:
				$resl = $num1 / $num2;
				echo "O resultado do calculo é : " . $resl;
				break;			
			default:
				# code...
				break;
		}

		?>
	</div>
	<br>
	<a href="form.html">Voltar</a>
</body>
</html>
