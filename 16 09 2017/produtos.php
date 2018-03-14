<!DOCTYPE html>
<html>
<head>
	<title>Calcular IMC</title>
</head>
<body>
	<h2>Escolha os produtos que gostaria de comprar</h2>
	<form action="produtos1.php" method="get">
		<h3>Celulares</h3>
		<label>Celulares </label>
		<select name="prod">
			<option>Celular 1</option>
			<option>Celular 2</option>
			<option>Celular 3</option>
			<option>Celular 4</option>
		</select><br><br>
		<label>Quantidade </label>
		<input type="number" name="quat">		<br><br>

		<hr>

		<h3>Carregadores</h3>
		<label>Carregador </label>
		<select name="prod1">
			<option>Carregador 1</option>
			<option>Carregador 2</option>
			<option>Carregador 3</option>
			<option>Carregador 4</option>
		</select><br><br>
		<label>Quantidade </label>
		<input type="number" name="quat1">		<br><br>

		<hr>
		<h3>Computadores</h3>
		<label>Computador </label>
		<select name="prod2">
			<option>Computador 1</option>
			<option>Computador 2</option>
			<option>Computador 3</option>
			<option>Computador 4</option>
		</select><br><br>
		<label>Quantidade </label>
		<input type="number" name="quat2">		<br><br>

		<hr>
		<h3>Notebooks</h3>
		<label>Notebooks </label>
		<select name="prod3">
			<option>Notebooks 1</option>
			<option>Notebooks 2</option>
			<option>Notebooks 3</option>
			<option>Notebooks 4</option>
		</select><br><br>
		<label>Quantidade </label>
		<input type="number" name="quat3">		<br><br>

		<hr>
		<h3>Camisetas</h3>
		<label>Camisetas</label>
		<select name="prod4">
			<option>Camisetas 1</option>
			<option>Camisetas 2</option>
			<option>Camisetas 3</option>
			<option>Camisetas 4</option>
		</select><br><br>
		<label>Quantidade </label>
		<input type="number" name="quat4">		<br><br>

		<button style="padding: 10px; background-color: green; color: #fff;">Comprar</button>
	</form>
</body>
</html>