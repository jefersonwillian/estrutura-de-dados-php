<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="estilo.css"/>
	<title>Calcular IMC</title>
</head>
<body> 
	<h2>Calcular IMC</h2> 
	<div style="width: 200px;">
		<?php 
		$p = ($_GET["i"]);
		$a = ($_GET["f"]);

		$r = $a * $a;
		$massa = $p / $r;


		if ($massa <= 17) { 
			$mensagem = "<p style='background-color: yellow; color: #000;'>Muito abaixo do peso</p>"; 
		} 
		elseif(($massa > 17) and ($massa <=18.49)) { 
			$mensagem = "<p style='background-color: yelleow; color: #000;'>Abaixo do peso</p>"; 
		} 
		elseif(($massa > 18.5) and ($massa <=24.99)) { 
			$mensagem = "<p style='background-color: green; color: #fff;'>Peso Normal</p>"; 
		} 
		elseif(($massa > 25) and ($massa <=29.99)) { 
			$mensagem = "<p style='background-color: red; color: #fff;'>Acima do Peso</p>"; 
		} 
		elseif(($massa > 30) and ($massa <=34.99)) { 
			$mensagem = "<p style='background-color: red; color: #fff;'>Obesidade I</p>"; 
		} 
		elseif(($massa > 35) and ($massa <=39.99)) { 
			$mensagem = "<p style='background-color: red; color: #fff;'>Obesidade II (severa)</p>"; 
		} 
		else {	
			$mensagem = "<p style='background-color: red; color: #fff;'>Obesidade III (mórbida)</p>"; 
		} 

		echo "Seu IMC é: <b> $massa </b><br>"; 
		echo "Você esta: <b> $mensagem</b>"; 

		?>
	</div>
	<br>
	<a href="imc.html">Voltar</a>
</body>
</html>
