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
       $frase = "Estou aprendento PHP no Curso em Vídeo de PHP";
		$cont = substr_count($frase,"PHP");
		echo "PHP encontrado $cont vezes"; 
    ?>
</div>
</body>
</html>