<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:1;
		echo "<h1>Calculando fatorial de $v</h1>";
		$c = $v;
		$fat = 1;
		do{
			$fat *= $c;
			$c--;
		}while($c>=1);
		echo "<h2>$v != $fat</h2>";
    ?>
	<p><a href="02fatorial.html" class="botao">Voltar</a></p>
</div>
</body>
</html>