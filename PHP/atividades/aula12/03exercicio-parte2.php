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
		$n = isset($_GET["num"])?$_GET["num"]:1;
		$i = 1;
		echo "<h1>Mostrando a tabuada de $n</h1>";
        do{
			echo "$n x $i = ".($n*$i)."<br>";
			$i++;
		}while($i <= 10);
    ?>
	<br>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>