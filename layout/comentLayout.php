<?php 
	require "config/database/database.php";

	$ConsultaComentarios = "SELECT * FROM comentarios";
	$ConsultaProceso     = mysqli_query($Conexion, $ConsultaComentarios);

	//Consulta comentarios.
	$CantidadComentarios = mysqli_num_rows($ConsultaProceso);


	function ContarComentarios($_parametro){
		if ($_parametro == 0) {
			$CantidadComentario = '<p class="comment-count">No hay comentarios aún.</p>';
			echo $CantidadComentario;
		}elseif ($_parametro == 1) {
			 $CantidadComentario = '<p class="comment-count">1 comentario.</p>';
			echo $CantidadComentario;
		}else{
			 $CantidadComentario = '<p class="comment-count">'. $_parametro .' comentarios.</p>';
			echo $CantidadComentario;
		}
	}
 ?>
<div class="info-bar">
	<div class="show-by">
		<select name="show-a" class="show-a">
			<option value="recent">Recientes</option>
			<option value="older">Más viejos</option>
		</select>
	</div>

	<div class="comment-count">
		<p class="number"><?php ContarComentarios($CantidadComentarios); ?></p>
	</div>
</div>


<div class="comments">
		
</div>