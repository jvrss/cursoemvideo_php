<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <link rel="stylesheet" href="_css/estilo.css"/>
	  <meta charset="UTF-8"/>
	  <title>Curso de PHP - CursoemVideo.com</title>
	</head>
	<body>
		<div>
			<?php
			
				$n = isset($_GET["num"])? $_GET["num"] : 0;
				
				$o = isset($_GET["oper"])? $_GET["oper"] : 1;
				
				switch($o){
					
					case 1:
						
						$r = $n * 2;
						break;
						
					case 2:
					
						$r = $n ^ 3;
						break;
						
					case 3:
					
						$r = $n * 0.5;
						break;
					
				}
				
				echo "O resultado da operação solicitada for <span class='foco'>$r</span>"
			?>
			<br/>
			<a href="exercicio01.html" class="botao">Voltar</a>
		</div>
	</body>
</html>
 