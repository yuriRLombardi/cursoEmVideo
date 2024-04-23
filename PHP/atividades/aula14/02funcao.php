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
        function soma ($a,$b){
			return $a+$b;
		}
		
		$x = 3;
		$y = 8;
		$r = soma($x,$y);
		echo "A soma entre $x e $y é igual à $r"
    ?>
</div>
</body>
</html>