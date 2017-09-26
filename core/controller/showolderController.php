<?php 
		require "../../config/database/database.php";

		$ConsultaLeer    = "SELECT * FROM comentarios ORDER BY id ASC";
		$ConsultaProceso = mysqli_query($Conexion, $ConsultaLeer);

		while($Columna = mysqli_fetch_assoc($ConsultaProceso)){
			$Fecha    = $Columna['created_at'];
			$Nickname = $Columna['nickname'];
			$Post     = $Columna['comentario'];


			echo '
			<div class="comment-c">

				<div class="row-1">
					<p class="nickname-c">'.$Nickname.'</p>
					<p class="date-c">'.$Fecha.'</p>
				</div>

				<div class="row-2">
					<p class="post-c">'.$Post.'</p>
				</div>

			</div>';
		}

 ?>