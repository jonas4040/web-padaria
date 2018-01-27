<?php
include("../conexao.php");

$nome_fantasia = $_POST['nome_fantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO mensagensf (`nome_fantasia`, `email`, `mensagem`, `telefone`, `data`) VALUES ('$nome_fantasia', '$email', '$mensagem', '$telefone', NOW())";

if(isset($_POST['nome_fantasia'])){
	$resultado = mysql_query($sql,$conexao) or die (mysql_error());
} else {
	header("Location: mensagemf.html");
}
mysql_close($conexao);

header("Location: mensagemf.html");
?>
