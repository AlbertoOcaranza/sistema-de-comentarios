$(document).ready(function() {
	Read();

	//Variables.
	var option;
	var nickname, comentario, boton;
	var niLenght, coLenght;
	var message = $("#message");
	var messageTxt = $(".message-text");
	var none, success, alert, error;
	none    = "message";
	success = "message-success";
	alert   = "message-alert";
	error   = "message-error";
	//Asignación de objetos.
	nickname = $('.nickname');
	comentario = $('.post');
	boton = $('.btn-submit');
	option = $('.show-a');


	//Funciones de evento.
	$(message).click(function() {
		$(this).attr("class", none);
	});
	$(message).hover(function() {
		$(messageTxt).html("Click aquí para cerrar el mensaje.")
	});
	$(boton).click(function () {
		niLenght = nickname.val().length;
		coLenght = comentario.val().length;
		if (niLenght <= 4) {
			//Mensaje
			message.attr("class", alert);
			messageTxt.html("Nickname muy pequeño.");

		}else if (coLenght <= 2) {
			message.attr("class", alert);
			messageTxt.html("Post muy pequeño.");
			message.attr("class", alert);
		}else{
			var n, c;
			n = $('.nickname').val();
			c = $('.post').val();
			Insert(n, c);
			nickname.val("");
			comentario.val("");
		}
	});

	$(option).change(function() {
		var value = $( ".show-a option:selected" ).text();
		if (value == "Recientes") {
			Read();
		}else{
			ReadLast();
		}

	});
	//Funciones
	function Insert(nickname, comentario){
		$.ajax({
			url: 'core/controller/insertController.php',
			type: 'POST',
			dataType: 'HTML',
			data: {nickname: nickname, post: comentario},
			success:function(data) {
				if (data == "success") {
					Read();
				}else{
					//Mensaje
					message.attr("class", error);
					messageTxt.html("A ocurrido un error :(");
				}
			}
		})	
	}	

	//Mostrar más viejos
	function ReadLast(){
		$.ajax({
			url: 'core/controller/showolderController.php',
			type: 'POST',
			dataType: 'HTML',
			success:function(data) {
				$(".comments").html(data);
			}
		})
		
		
	}

	//Mostrar recientes
	function Read(){
		$.ajax({
			url: 'core/controller/showController.php',
			type: 'POST',
			dataType: 'HTML',
			success:function(data) {
				$(".comments").html(data);
			}
		})
		
		
	}

	
});