
<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#close').click(function(){

		$('#load').hide('slow');	

	});


	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#rUserL').click(function(){

		$('#load').load('dist/php/load_user_login.php');

	});


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="nUser" class="box-row-center">
	
	<form action="" method="">
		<h2>Registrarse</h2>
		<input type="text" name="nombre" placeholder="   Nombre" required></input>
		<input type="text" name="apellido" placeholder="   Apellido" required></input>
		<input type="text" name="usuario" placeholder="   Usuario" required></input>
		<input type="password" name="clave" placeholder="   Contraseña" required></input>
		<input type="text" name="telefono" placeholder="   Teléfono" required></input>
		<input type="text" name="cedula" placeholder="   cedula" required></input>
		<input type="text" name="telefono" placeholder="   Teléfono" required></input>
		<input type="email" name="correo" placeholder="   Correo Electrónico"></input>	
		
		<input type="submit" value="Enviar" id="boton"></input>
	</form>

	<div id="rUser">Si ya estás registrado entra</div>
	<div id="rUserL">Aquí</div>

	
</div> 

