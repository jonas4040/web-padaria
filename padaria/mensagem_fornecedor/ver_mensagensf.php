<head>
<title>Ver mensagens (fornecedores)</title>
</head>
<h1>Ver mensagens (fornecedores)</h1><hr>

<?php
include("../conexao.php");

$query = "SELECT id_mensagem, nome_fantasia, email, telefone, mensagem, DAY(data), MONTH(data), YEAR(data) FROM mensagensf ORDER BY id_mensagem";
$resultado = mysql_query($query,$conexao);

$contar1 = "SELECT COUNT(*) FROM mensagensf";
$contar2 = mysql_query($contar1,$conexao);
$contado = mysql_fetch_array($contar2);;

if($contado['COUNT(*)'] != 0){
while ($linha = mysql_fetch_array($resultado)) {

	echo "<b>Enviado por:</b> ".$linha['nome_fantasia'].", ".$linha['email'].". Em: ".($linha['DAY(data)'])." de ";
              if($linha['MONTH(data)']==1){echo "janeiro";}
              elseif($linha['MONTH(data)']==2){echo "fevereiro";}
              elseif($linha['MONTH(data)']==3){echo "março";}
              elseif($linha['MONTH(data)']==4){echo "abril";}
              elseif($linha['MONTH(data)']==5){echo "maio";}
              elseif($linha['MONTH(data)']==6){echo "junho";}
              elseif($linha['MONTH(data)']==7){echo "julho";}
              elseif($linha['MONTH(data)']==8){echo "agosto";}
              elseif($linha['MONTH(data)']==9){echo "setembro";}
              elseif($linha['MONTH(data)']==10){echo "outubro";}
              elseif($linha['MONTH(data)']==11){echo "novembro";} 
			  elseif($linha['MONTH(data)']==12) { echo "dezembro";}
              echo " de ".$linha['YEAR(data)']."<br>";
	echo "<b>Telefone:</b> ".$linha['telefone'];
	echo "<br><b>Mensagem: </b>".$linha['mensagem'];
	
	echo "<form action='responder_mensagemf.php' method=post>";
	echo "<textarea name=resposta></textarea>";
	echo "<input type=hidden name=email value=".$linha['email'].">";
	echo "<input type='submit' value='Responder'>";		
	echo "</form>";
	
	echo "<form action='excluir_mensagemf.php' method=post>";
	echo "<input type='submit' value='Excluir'>";
	echo "<input type=hidden name=id_mensagem value=".$linha['id_mensagem'].">";
	echo "</form>";
	
	echo "<hr>";	

}} else{
	echo "Não há mensagens para ver no momento!";
}



mysql_close($conexao);
?>
