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
		$est = isset($_GET["est"])?$_GET["est"]:4;
		switch($est){
			case 1:
			$c = "Região Norte";
			break;
			case 2:
			$c = "Região Norteste";
			break;
			case 3:
			$c = "Região Centro-Oeste";
			break;
			case 4:
			$c = "Região Sudeste";
			break;
			case 5:
			$c = "Região Sul";
		}
		echo "Você mora na <span class='foco'>$c</span><br>";
    ?>
	<a class="botao" href="exercicio03.html">Voltar</a>
</div>
</body>
</html>