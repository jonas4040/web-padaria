<?php
	include("conexao.php");
	
	$id = $_POST['id_mensagem'];

	$query = "DELETE FROM mensagens WHERE `id_mensagem`=$id";
	$resultado = mysql_query($query,$conexao);
	
	header("Location: ver_mensagens.php");
?>