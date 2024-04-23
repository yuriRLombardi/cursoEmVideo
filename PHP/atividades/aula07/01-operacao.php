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
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$tipo = $_GET["op"];
			echo "Os valores passados foram $n1 e $n2<br>";
			$r = ($tipo == "s")?$n1+$n2:$n1*$n2;
			echo "O resultado é $r"
		?>
	</div>
</body>
<html>