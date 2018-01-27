<?php

include("conexao.php");

$id_produto = $_POST['id_produto'];

$query = "DELETE FROM produtos WHERE `id_produto` = $id_produto";

$resultado = mysql_query($query,$conexao);

mysql_close($conexao);

header("Location: ver_produtos.php");
?>