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
       $nome = "   José da Silva   ";
		echo strlen($nome)."<br>";
		$novo = ltrim($nome);
		echo $novo."<br>";
		echo strlen($novo);
    ?>
</div>
</body>
</html>