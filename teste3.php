<style type="text/css">

	h1{
		color:darkcyan;
		text-shadow: 1px 1px black;
		text-align: center;
		font-family: Tahoma;
		font-weight: 24px;
		margin: 12px;
	}

	

	
</style>

<?php



	$nome = $_POST["nome"];
	
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
	echo "<title>TESTE PHP</title>";
	echo "</head>";
	echo "<body>";
	echo "<h1>Seja Bem Vindo(a), $nome</h1>";
		if ($nome == 'chris') {
			echo "Oi Meu Gatão Fofo do Coração!!!";
			
		}elseif ($nome == 'Gisalaine' || $nome== 'gi' ) 
		{
			echo "Má OIE!!!";
		}elseif ($nome == 'guabi fios' || $nome == 'Guabi Fios' || $nome == 'guabi' ) 
		{
			echo "Eiiiiiita, mas eu sabia que uma hora você ia assumir esse nome hehe !";
		}
		else
		{

			echo "Fuja Loko"; 
		}
	echo "</body>";
	echo "</html>";


	



?>
<html>
	<head>
		<style type="text/css">
		a{
			font-size: 24px;
			text-align: center;
			padding: 820px;
		}
	</style>
	</head>
	<body>
		
		<a href="teste2.html">Voltar </a>
	</body>
</html>


