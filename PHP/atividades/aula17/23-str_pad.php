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
		$nome = "Guanabara";
		$novo = str_pad($nome,30," ",STR_PAD_RIGHT);
		print("Meu professor $novo é lindo!");
    ?>
</div>
</body>
</html>