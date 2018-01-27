<head>
<title>Alterar produtos</title>
</head>

<h1>Alterar produtos</h1><hr>

<?php

include("conexao.php");

$id_produto = $_POST['id_produto'];

$query = "SELECT id_produto, descricao, preco, qtde, unidade, DAY(validade), MONTH(validade), YEAR(validade), id_fornecedor FROM produtos WHERE id_produto=$id_produto";

$resultado = mysql_query($query,$conexao);

$linha = mysql_fetch_array($resultado);

$descricao = $linha['descricao'];
$qtde = $linha['qtde'];
$preco = $linha['preco'];
$unidade = $linha['unidade'];

$dia_validade = $linha['DAY(validade)'];
$mes_validade = $linha['MONTH(validade)'];
$ano_validade = $linha['YEAR(validade)'];

$id_fornecedor = $linha['id_fornecedor'];

mysql_close($conexao);
?>
<table>
<form action="alterar_produtos2.php" method="POST">
            <input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
            <tr><td>Descrição</td><td><input type="text" maxlength=500 name="descricao" value="<?php echo $descricao; ?>"></td></tr>
            <tr><td>Preço</td><td><input type="text" name="preco" value="<?php echo $preco; ?>"></td></tr>
			<tr><td>Quantidade</td><td><input type="text" name="qtde" value="<?php echo $qtde; ?>"></td></tr>
			<tr><td>Data de validade</td><td><input size=1 type="text" name="dia_validade" value="<?php echo $dia_validade; ?>">
								<input type="text" size=1 name="mes_validade" value="<?php echo $mes_validade; ?>">
								<input type="text"size=4 name="ano_validade" value="<?php echo $ano_validade; ?>"></td></tr>
			<tr><td>Unidade</td><td><input size=1 type="text" name="unidade" value="<?php echo $unidade; ?>">
			<tr><td>ID do fornecedor</td><td><input type="text" name="id_fornecedor" value="<?php echo $id_fornecedor; ?>"></td></tr>
			
			<tr colspan=2><td><input type="submit" value="Guardar"></td></tr>
        </form>
		</table>