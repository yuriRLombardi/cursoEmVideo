<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	span{
		color:red;
	}
	a{
		background:#F0F0F0;
		padding: 1px 6px;
		border:1px solid black;
		border-radius:10%;
		color:black
	}
	a:hover{
	 text-decoration:none;	
	}
  </style>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
		$m = ($n1+$n2)/2;
		if($m < 5){
			$situacao = "REPROVADO";
		}
		elseif($m >= 5 && $m <= 7){
			$situacao = "RECUPERAÇÃO";
		}
		else{
			$situacao = "APROVADO";
		}
		echo "A média entre <span>$n1</span> e <span>$n2</span> é <span>$m</span><br>";
		echo "Situação do aluno: <span>$situacao</span><br>";
    ?>
	<a href = "exercicio03.html">Voltar</a>
</div>
</body>
</html>
 