<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <!--
	Contador com Do While
  -->
</head>
<body>
<div>
    <?php
		$c = 10;
		do{
			echo $c." ";
			$c--;
		}while($c>=1)
    ?>
</div>
</body>
</html>