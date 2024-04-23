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
        $c = 1;
	    while($c <= 5){
			$v = "num".$c;
			$url = "v".$c;
			$$v = isset($_GET[$url])?$_GET[$url]:0;
			$c++;
			//Pega os dados da URL
		}
		$c=1;
		while($c<= 5){
			$v = "num".$c;
			echo "Valor $c : ".$$v."<br>";
			$c++;
			//Acessa os dados e mostra
		}
    ?>
</div>
</body>
</html>