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
		$inicio = isset($_GET["in"])?$_GET["in"]:0;
		$final = isset($_GET["fi"])?$_GET["fi"]:0;
		$incremento = isset($_GET["incre"])?$_GET["incre"]:1;
		if($inicio < $final){
			while($inicio <= $final){
				echo $inicio." ";
				$inicio += $incremento;
			}
		}
		elseif($inicio > $final){
			while($inicio >= $final){
				echo $inicio." ";
				$inicio -= $incremento;
			}
		}
		else{
			echo "Não tem contagem";
		}
		echo "<br>"
    ?>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>