<meta charset="UTF-8">

<?php
$conexao = mysql_pconnect("localhost","root","") or die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("padaria",$conexao) or die ("Erro de conex�o com banco de dados, o seguinte erro ocorreu -> ".mysql_error());

?>
