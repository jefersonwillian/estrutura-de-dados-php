<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calcular IMC</title>
</head>
<body> 
	<h2>Resultado do Calculo</h2> 
	<div style="width: 200px;">
		<?php 
		$nome = ($_GET["nome"]);
		$ano = ($_GET["ano"]);

		$idade = 2017 - $ano;

		if ($idade < 18) {
			echo "Seu nome é ". $nome ."<br><br>";
			echo "Sua idade é ". $idade . "<br><br>";
			echo "Você é menor de idade";
		}else{
			echo "Seu nome é ". $nome ."<br><br>";
			echo "Sua idade é ". $idade . "<br><br>";
			echo "Você é maior de idade";			
		}		

		?>
	</div>
	<br>
	<a href="form.php">Voltar</a>
</body>
</html>
