<?php

//quando clicar em encomendar criar registro no BD e avisar o usuariopara confirmar
	$valor =0;
	echo "ARRASTAR PRODUTOS";
	echo "<meta charset=utf-8>";
	echo "<title>Produtos</title>";
	echo "<h1 align=center>PRODUTOS</h1>";
	echo "<script src='js/check.js'></script>";
include("conexao.php");

	//$query="SELECT foto,preco,descricao FROM produtos"; //para exibir dados produto
	//$res=mysql_query($query,$conexao);
echo "<table border=2 style='width:705px;'>";
echo "<tr style='height:150px;'><td>foto<td>foto<td>foto<td>foto<td>afoto</tr>";
echo "<tr style='height:20px;'> <form action='' method=post>";
define ("LIMITE",5);//constante limite para ser usado no while
$i=0;
while($i<=LIMITE){
echo "<td>nome produto<input type=checkbox name='c[]' value='$i' onclick=''>";
$i++;


$i++;$valor++;
}
echo "<input type=submit>";
echo "</form></tr>";

/*while ($linha = mysql_fetch_array($res)) {
	echo "<tr><td>".$linha["descricao"]."</td><td>".$linha["idProduto"]."</td></tr><br>";
}*/
echo "</table>";

//check
//include("conexao.php");
  $valorCheck = $_POST['c'];

  if(empty($valorCheck)) 
  {//se nãotiver valor
    echo("Você não selecionou.");$update=mysql_query("update encomendas set idProduto='hu' where id_encomenda!='$valorCheck[$i]'")	;
  } 
  else
  {//se a pessoa selecionar
    $N = count($valorCheck);

    echo("You selected $N id(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($valorCheck[$i] . " ");
	$update=mysql_query("update encomendas set idProduto='$valorCheck[$i]' where id_encomenda = '$valorCheck[$i]' ") or die(mysql_error());
	
    }
  }
  if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!";
}else{
  echo "Aviso: Não foi atualizado!";
}
  
//define("consulta","select * from produtos where id=$valorCheck[$i]");
//termina check

//echo "<a href='encomenda.php'>Adicionar a lista de encomenda</a>";

//post para o id em uma $var
//se o chek tiver marcadoenvia $var pro Banco Dados no SLECT
/*
		if(isset($_POST['c']))
{
    echo "checkbox marcado! <br/>";
    echo "valor: " . $_POST['c'];
}
else
{
    echo "checkbox não marcado! <br/>";
}
*/


?>
