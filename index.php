<?php 
// Importando arquivos;
require 'config.php';
require 'insert.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Projeto Comentários</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Projeto Comentários PHP e MSQL</h1>
	<div class="container">
		<h3>Comentários</h3>
		<fieldset>
		<form method="post">
			Nome:<br>
			<input type="text" name="nome"><br><br>
			Mensagem:<br>
			<textarea name="mensagem"></textarea><br><br>
			<input type="submit" value="Enviar Mensagem">	
		</form>
	</fieldset>
	<div class="list-msgs">
		<!-- Listando mensagens -->
		<?php 
			require 'show.php';
		?>
<br><br>
</body>
</html>

