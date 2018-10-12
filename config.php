
<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host=localhost","root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDException $e) {
	echo "ERRO".$e->getMessage();
	exit;
}