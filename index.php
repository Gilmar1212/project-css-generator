<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerador Css</title>
</head>
<body>
	<form action="gerarcss.php" method="POST">
		<label for="color">Capiturar cor:</label>
			<input type="color" name="color"><br><br>
		<label for="marcador">Marcador: </label>
			<input type="text" name="marcador" placeholder="Insira:tag,classe,id,etc"><br><br>
		<label for="atributos">Atributos: </label>
			<textarea type="text" name="atributos"></textarea>
			<input type="submit">
	</form>
	<div class="background-black">
		
	</div>
</body>
</html>