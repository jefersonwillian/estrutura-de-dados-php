<!DOCTYPE html>
<html>
<head>
	<title>Calcular IMC</title>
</head>
<body>
	<form action="form1.php" method="get">
		<h2>Calculo da sua idade</h2>
		
		<label>Nome</label>
		<input type="text" name="nome"><br><br>

		<label>Ano de Nascimento:</label>
		<select name="ano">
			<?php 
			for ($i=1900; $i <= 2017; $i++) { 
				echo "<option name='1' >". $i. "</option>";
			}
			?> 
		</select>
		<br><br>
		<button>Calcular</button>
	</form>
</body>
</html>