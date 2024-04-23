<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="UTF-8">
	<title>Curso de PHP - CursoemVideo.com</title>
	<link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
	<div>
		<?php
			$valor = $_GET["v"];
			$rq = sqrt($valor);
			echo "A raiz de $valor é igual a ".number_format($rq,2);
		?>
		<a href="01-exercicio.html">Voltar</a>
	</div>
</body>
<html>