<head>
<title>Ver produtos</title>
</head>

<h1>Ver produtos</h1><hr>

<?php

include("conexao.php");

$query = "SELECT id_produto, descricao, preco, qtde, unidade, DAY(validade), MONTH(validade), YEAR(validade), id_fornecedor FROM produtos ORDER BY id_produto";

$resultado = mysql_query($query,$conexao);

echo "<table border=1>";
echo "<tr style='font-weight: bold;'> <td colspan=2></td> <td>ID do Produto</td> <td>Descrição</td> <td>Preço</td> <td>Quantidade</td> <td>Unidade</td> <td>Validade</td> <td>ID do Fornecedor</td> </tr>";

while ($linha = mysql_fetch_array($resultado)) {

echo "<tr><td>";

echo "<form action='alterar_produtos1.php' method=post>";
echo "<input type='image' src='lapis.png' href='altera' alt='Editar dados'>";
echo "<input type=hidden name=id_produto value=".$linha['id_produto'].">";
echo "</form>";

echo "</td><td>";

echo "<form action='excluir_produtos.php' method=post>";
echo "<input type='image' src='lixeira.png' src='lixeira.png' alt='Editar dados'>";
echo "<input type=hidden name=id_produto value=".$linha['id_produto'].">";
echo "</form>";

echo "</td><td>";
echo $linha['id_produto'];

echo"</td><td>";
echo $linha['descricao'];

echo"</td><td>";
echo $linha["preco"];

echo"</td><td>R$ ";
echo $linha['qtde'];

echo"</td><td>";
echo $linha['unidade'];

echo"</td><td>";
echo $linha['DAY(validade)'].'/'.$linha['MONTH(validade)'].'/'.$linha['YEAR(validade)'];

echo"</td><td>";
echo $linha['id_fornecedor'];

echo "</td></tr>";
}
echo "</table>";

mysql_close($conexao);

?>