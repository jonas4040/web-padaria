<?php
	include("conexao.php");
	
	$id = $_POST['id_mensagem'];

	$query = "DELETE FROM mensagensf WHERE `id_mensagem`=$id";
	$resultado = mysql_query($query,$conexao);
	
	header("Location: ver_mensagensf.php");
?>