<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('scripts-header.php')?>
	</head>
	<body>


	<div class="body">
		<?php require_once ('cabecalho.php')?>

		
			
		<?php
			if (empty($_GET['page'])){
				require('home.php');
			}elseif(file_exists($_GET['page'].'.php')){
						require($_GET['page'].'.php');
			}Else{
				echo '<span> Desculpe, esta pagina é inválida<span>';
			}
		?>

		<?php require_once ('rodape.php')?>
	</div>
		<?php require_once ('scripts-footer.php')?>

</body>
</html>