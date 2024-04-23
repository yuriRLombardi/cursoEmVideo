<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
   <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
		$n = isset($_GET["num"])?$_GET["num"]:1;
		$qtdMul = 0;
		echo "<h1>Analisando o número $n...</h1>";
		echo "Valores múltiplos: ";
		for($c = 1;$c<=$n;$c++){
			$v = $n % $c;
			if($v == 0){
				$qtdMul += 1;
				echo $c." ";
			}
		}
		echo "<p>Total de múltiplos: $qtdMul</p>";
		if($qtdMul <= 2){
			echo "<h2>Resultado: $n <span class='foco'>É PRIMO</span></h2>";
		}
		else{
			echo "<h2>Resuldado: $n <span class='foco'>NÃO É PRIMO</span></h2>";
		}
    ?>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>