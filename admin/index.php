<!DOCTYPE html>
<html>
	<head>
		<?php require_once ('include-scripts-header.php')?>
	</head>
	<body>


	<div class="body">
		<?php require_once ('include-header.php')?>

		
			
		<?php
			if (empty($_GET['page'])){
				require('dashboard.php');
			}elseif(file_exists($_GET['page'].'.php')){
						require($_GET['page'].'.php');
			}Else{
				echo '<span> Desculpe, esta pagina é inválida<span>';
			}
		?>

		<?php require_once ('include-footer.php')?>
	</div>
		<?php require_once ('include-scripts-footer.php')?>

</body>
</html>