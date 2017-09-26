<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Comentarios</title>
	<!--CSS-->
	<link rel="stylesheet" href="layout/css/ui.css">
	<!--JS-->
	<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous">
			  	
	</script>
	<script src="layout/js/script.js"></script>
	<script src="layout/js/ui.js"></script>
</head>
<body>
	<?php include ("layout/messageLayout.php"); ?>
	<div class="container">
		<p class="title">Comentar algo</p>
		<?php include("layout/formLayout.php"); ?>
		<div class="line"></div>
		<?php include("layout/comentLayout.php"); ?>
	</div>
</body>
</html>