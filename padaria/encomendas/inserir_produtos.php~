<?php

include("conexao.php");

$id_fornecedor = $_POST['id_fornecedor'];
$qtde = $_POST['qtde'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$validade = $_POST['validade'];
$unidade = $_POST['unidade'];

$sql = "INSERT INTO produtos (`id_fornecedor`, `qtde`, `preco`, `descricao`, `validade`, `unidade`) VALUES ('$id_fornecedor', '$qtde', '$preco', '$descricao', '$validade', '$unidade');";

if(isset($_POST['id_fornecedor'])){
	$resultado = mysql_query($sql,$conexao) or die (mysql_error());
} else {
	header("Location: inserir_produtos.html");
}
mysql_close($conexao);

header("Location: inserir_produtos.html");

?>