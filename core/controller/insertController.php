<?php 
	//Require.
	require "../../config/database/database.php";
	require "../../config/database/app.php";
	date_default_timezone_set(zone);

	//Variables de input.

	$nickname   = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_SPECIAL_CHARS);
	$post = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_SPECIAL_CHARS);
	$post = nl2br($post);
	$dia = date("D");
	$diaN = date("d");
	$mes = date("F");
	$hora = date("H").":".date("i");
	$fecha = $dia." ".$diaN." de ".$mes." a las ".$hora;

	//Consulta.
	$ConsultaInsertar = "INSERT INTO comentarios (nickname, comentario, created_at) VALUES ('$nickname', '$post', '$fecha')";
	$ConsultaProceso = mysqli_query($Conexion, $ConsultaInsertar);

	if ($ConsultaProceso) {
		echo "success";
	}else{
		echo "error";
	}
?>