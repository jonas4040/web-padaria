<?php	
	$email = $_POST['email'];
	$resposta = $_POST['resposta'];
	
	$enviar = mail($email, "Resposta da Padaria & Mercearia Primavera", $resposta);	
	
	if($enviar){
		echo "Mensagem enviada com sucesso!";
	}else{
		echo "A mensagem não p&ocircde ser enviada!";	
	}
	
	include("redirecionar.html");
?>