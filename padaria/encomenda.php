<?php
	echo "<meta charset=utf-8>";
	echo "<title>Encomenda</title>";
	echo "<h1 align=center>Encomenda</h1>";
include("conexao.php");
$valor=6;
	$query="SELECT produtos.descricao, encomendas.total FROM produtos,encomendas WHERE idProduto is  not null";
	$res=mysql_query($query,$conexao);
echo "<table border=2>";
echo "<tr><TD><b>Descrição</td> <td><b>Total em R$</td></tr>";
while ($linha = mysql_fetch_array($res)) {
	echo "<tr><td>".$linha["descricao"]."</td><td>".$linha["total"]."</td></tr><br>";
}echo "</table>";echo "<a href='encomenda.php'>Encomendar</a>";
?>
