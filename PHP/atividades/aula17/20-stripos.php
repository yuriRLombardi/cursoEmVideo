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
       $frase = "Estou aprendento PHP";
		$pos = stripos($frase,"php");
		echo "$frase<br>A String foi encontrado na posição $pos"; 
    ?>
</div>
</body>
</html>