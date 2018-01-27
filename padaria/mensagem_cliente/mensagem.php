<?php
include("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO mensagens (`nome`, `email`, `mensagem`, `data`) VALUES ('$nome', '$email', '$mensagem', NOW());";

if(isset($_POST['nome'])){
	$resultado = mysql_query($sql,$conexao) or die (mysql_error());
} else {
	header("Location: mensagem.html");
}
mysql_close($conexao);

header("Location: mensagem.html");
?>
