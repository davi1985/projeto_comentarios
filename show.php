<?php
// ESTE SCRIPT LISTA AS MSG QUE FORAM INSERIDAS NO BANCO DE DADOS;
require 'config.php';	


$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $mensagem):
		?>
		<strong>
			<?php echo $mensagem['nome']; ?>
				
		</strong><br>
			<?php echo $mensagem['msg']; ?>
		<hr>
		<?php
	endforeach;

} else {
	echo "Não ha mensagens";
}

 ?>
