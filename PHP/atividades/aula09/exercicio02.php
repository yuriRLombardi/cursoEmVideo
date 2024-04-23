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
		if($idade < 16){
			$tipoDeVoto = "não vota";
		}
		elseif(($idade >= 16 && $idade < 18) or ($idade > 65)){
				$tipoDeVoto = "voto opcional";
		}
		else{
			$tipoDeVoto = "voto obrigatorio";
		}
		echo "Para essa idade, $tipoDeVoto";
    ?>
</div>
</body>
</html>