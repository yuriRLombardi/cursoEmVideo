<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
	<table border="1"><tr>
    <?php
       $c = range(5,20,2);
	   foreach($c as $valor){
		   echo "<td>$valor ";
	   }
    ?>
	</table>
	</pre>
</div>
</body>
</html>