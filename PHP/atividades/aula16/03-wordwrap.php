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
       $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap" ;
	   $r = wordwrap($t,10,"<br>\n",false);
	   echo $r;
	?>
</div>
</body>
</html>