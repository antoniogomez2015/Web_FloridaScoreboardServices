
<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#close').click(function(){

		$('#load').hide('slow');	

	});


	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#rUserL').click(function(){

		$('#load').load('dist/php/load_user_recover.php'); 

	});


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="nUser" class="box-row-center">
	
	<form action="" method="">
		<h2>Iniciar Sesión</h2>
		<input type="text" name="usuario" placeholder="   Usuario" required></input>		
		<input type="password" name="clave" placeholder="   Contraseña" required></input>
		
		<input type="submit" value="Enviar" id="boton"></input>
	</form>

	<div id="rUser">Ha olvidado su usuario ó contraseña entrar</div>
	<div id="rUserL">Aquí</div>

	
</div> 

