<?php 
//ESTE SCRIPT INSERE AS MSG NO BANCO DE DADOS;
require 'config.php';

// Verificando se houve envio de msgs;
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	// Inserindo msg no database;
	$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":msg", $mensagem);
	$sql->execute();
}
 ?>