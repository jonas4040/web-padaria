<form action="" method="post">

Selecione um id<br />
<input type="checkbox" name="check[]" value="1" />1<br />
<input type="checkbox" name="check[]" value="2" />2<br />
<input type="checkbox" name="check[]" value="3" />3<br />
<input type="checkbox" name="check[]" value="4" />4<br />
<input type="checkbox" name="check[]" value="5" />5

<input type="submit" name="formSubmit" value="Submit" />

</form>

<?php
include("conexao.php");
  $valorCheck = $_POST['check'];

  if(empty($valorCheck)) 
  {//se nãotiver valor
    echo("Você não selecionou.");
  } 
  else
  {
    $N = count($valorCheck);

    echo("You selected $N id(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($valorCheck[$i] . " ");
		$consulta="select * from produtos where id=$valorCheck[$i]";
	
    }
  }
?>
