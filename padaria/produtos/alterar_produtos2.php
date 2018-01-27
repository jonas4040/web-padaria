<?php

include("conexao.php");

	$id_produto = $_POST['id_produto'];
	$new_descricao = $_POST['descricao'];
	$new_qtde = $_POST['qtde'];
	$new_preco = $_POST['preco'];
	$new_unidade = $_POST['unidade'];
	
	$new_dia_validade = $_POST['dia_validade'];
	$new_mes_validade = $_POST['mes_validade'];
	$new_ano_validade = $_POST['ano_validade'];
	
	$new_validade = $new_ano_validade."-".$new_mes_validade."-".$new_dia_validade;
	$new_validade = mysql_real_escape_string($new_validade);
	
	$new_id_fornecedor = $_POST['id_fornecedor'];
	
	$alteracao = "UPDATE `produtos` SET `descricao`='$new_descricao', 
									   `qtde`='$new_qtde', 
									   `preco`='$new_preco', 
									   `unidade`='$new_unidade', 
									   `validade`='$new_validade', 
									   `id_fornecedor`='$new_id_fornecedor'
				  WHERE id_produto = $id_produto";

	$resultado = mysql_query($alteracao, $conexao);
	
	mysql_close($conexao);
	
	echo $new_descricao;
	
	header("Location: ver_produtos.php");

?>