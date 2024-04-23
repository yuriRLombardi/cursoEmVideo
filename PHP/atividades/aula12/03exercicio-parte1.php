<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
	<!--
		Exebição de tabuada de 1 à 10
	-->
</head>
<body>
<div>
	<form method="get" action="03exercicio-parte2.php">
		Número:
		<select name="num" value="1">
			<?php
				$c = 1;
				do{
				echo"<option value='$c'>$c</option>";
				$c++;
				}while($c<=10);
			?>
		</select>
		<input type="submit" value="Tabuada" class="botao">
	</form>
</div>
</body>
</html>