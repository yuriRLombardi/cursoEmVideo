<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--
	Criação de 5 caixas de textos dinâmicos com while
	feito por: Yuri
	-->
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="02-parte2.php">
	<?php
		$c = 1;
		while($c<=5){
		echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
		$c++;
		}
	?>
		<input type="submit" value="Entrar" class="botao">
	</form>
</div>
</body>
</html>