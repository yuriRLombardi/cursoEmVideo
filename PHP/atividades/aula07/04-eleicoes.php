<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
	<div>
		<?php
			$ano = $_GET["an"];
			$idade = 2024 - $ano;
			echo "Quem nasceu em $ano tem idade de $idade anos<br>";
			$tipo = $idade>=18 && $idade<=65?"OBRIGADORIO":"NÃO OBRIGADORIO"; 
			echo "Seu voto é $tipo";
		?>
	</div>
</body>
<html>