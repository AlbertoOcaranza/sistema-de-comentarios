<?php 
	DEFINE('host', 'localhost');
	DEFINE('user', 'root');
	DEFINE('pass', '');
	DEFINE('data', 'sistema_comentarios');



	$Conexion = new mysqli(host, user, pass, data) or die ("ERROR: ".mysqli_connect_error());
 ?>