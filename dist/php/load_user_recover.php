
<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#close').click(function(){

		$('#load').hide('slow');	

	});


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="recover_u" class="box-row-center">
	
	<h2 class="c1">Si ha perdido ó no recuerda su usuario ó contraseña no se preocupe, le enviaremos de inmediado sus datos de acceso a su correo con el cuál, se suscribió ha CitaMedica</h2>

	<p class="user">Sr. Javier Pérez</p>

	<p class="message">Los datos de recuperación de su cuenta se estarán enviando al correo:</p>

	<p class="email">monoproduccion@gmail.com</p>

	<button type="button" value="recover_u">Enviar</button>

	<h2 class="c2">También tendrá la posibilidad de indicar otro correo de recuperación en dado caso que no tenga acceso al correo con el cuál, se registró en CitaMedica</h2>

	<div id="nUser" class="box-row-center">
	
		<form action="" method="">
			<h2>Correo alternativo</h2>
			<input type="email" name="nombre" placeholder="   Correo alternativo" required></input>	
				
			<input type="submit" value="Enviar" id="boton"></input>

		</form>
	
	</div> 
	
</div> 

