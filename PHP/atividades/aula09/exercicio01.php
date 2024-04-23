<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
		$ano = isset($_GET["an"])?$_GET["an"]:1900;
		$idade = date("Y")-$ano;
		echo "Você nasceu em $ano e tem $idade<br>";
		if($idade >= 18){
			$v = "já pode votar";
			$d = "já pode dirigir";
		}
		else{
			$v = "não pode votar";
			$d = "não pode dirigir";
		}
		echo "Com essa idade você $v e $d";
    ?>
</div>
</body>
</html>