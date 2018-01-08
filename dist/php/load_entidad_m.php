
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


	//----------------------------------------------------------------------------

	//acción para ocultar botones de la sección de más entidades bancarias de nueva 
	//"entidad médica", "load_entidad_m.php"
	$('#btnPlus').click(function(){

		$('#btnPlus').hide();

	});

	$('#btnPlus2').click(function(){

		$('#btnPlus2').hide();

	});


	//----------------------------------------------------------------------------

	//acción para mostrar botones de más entidades bancarias
	$('#btnPlus').click(function(){

		$('#btnPlus2').show();

	});


	//----------------------------------------------------------------------------

	//acción para para ocultar todo el módulo de entidades bancarias
	$('#btnPlus0').click(function(){

		$('#btnPlus0').hide();

	});


	//----------------------------------------------------------------------------

	//acción para para ocultar todo el módulo de entidades bancarias
	$('#enviar-ent-banc').click(function(){

		$('#ent-banc').hide();

	});


	//----------------------------------------------------------------------------

	//acción para para ocultar el botón de más consultas
	$('#btnPlus3').click(function(){

		$('#btnPlus3').hide();

		$('#btnPlus4').show();

		$('plus4').show();

	});	

	//----------------------------------------------------------------------------

	//acción para para ocultar el botón de más consultas
	$('#btnPlus4').click(function(){

		$('#btnPlus4').hide();

	});	


	btnPlus4



</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="entidad-m">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

		<div class="box-row-center">
			
			<h2>Datos del Especialista</h2>

			<input type="text" name="nombre" value=" Nombre">
			<input type="text" name="apellido" value=" Apellido">
			<input type="text" name="cedula" value=" Cédula de Identidad">
			<input type="text" name="telefono" value=" Teléfono">
			<input type="text" name="titulo" value=" Titulo">
			<input type="email" name="email" value=" Correo Electrónico">

		</div>

		<div>

			<button type="button" onclick="bankplus0();" id="btnPlus0">Agregar más entidades bancarias</button>

			<div id="plus0">				
			</div>

			<script type="text/javascript">

				function bankplus0(){

					document.getElementById('plus0').innerHTML = '<h3>Especializaciones Adicionales:</h3><input type="text" name="especializacion" value=" Especialización"><input type="text" name="especializacion" value=" Especialización">			<input type="text" name="especializacion" value=" Especialización"><input type="text" name="especializacion" value=" Especialización"><input type="text" name="especializacion" value=" Especialización">';					
				}			

			</script>
			

		</div>
		

		<input type="submit" name="banco" id="enviar-ent-banc" value="Agregar Datos del Especialista">

	</form>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="ent-banc">

		<div class="box-row-center">
			
			<h2>Datos Bancarios</h2>

			<input type="text" name="entidad_bancaria" value=" Entidad Bancaria">
			<input type="text" name="numero_de_cuenta" value=" Número de Cuenta">
			<input type="text" name="titular" value=" Titular de la Cuenta">
			<input type="text" name="cedula" value=" Cédula de Identidad">
	
		</div>

		<div>
						
			<button type="button" onclick="bankplus();" id="btnPlus">Agregar más entidades bancarias</button>

			<div id="plus">				
			</div>

			<script type="text/javascript">

				function bankplus(){

					document.getElementById('plus').innerHTML = '<h2>Otra Entidad Bancaria:</h2><input type="text" name="entidad_bancaria" value=" Entidad Bancaria"><input type="text" name="numero_de_cuenta" value=" Número de Cuenta"><input type="text" name="titular" value=" Titular de la Cuenta"><input type="text" name="cedula" value=" Cédula de Identidad">';					
				}			

			</script>

			<button type="button" onclick="bankplus2();" id="btnPlus2">Agregar más entidades bancarias</button>

			<div id="plus2">				
			</div>

			<script type="text/javascript">

				function bankplus2(){

					document.getElementById('plus2').innerHTML = '<h2>Otra Entidad Bancaria:</h2><input type="text" name="entidad_bancaria" value=" Entidad Bancaria"><input type="text" name="numero_de_cuenta" value=" Número de Cuenta"><input type="text" name="titular" value=" Titular de la Cuenta"><input type="text" name="cedula" value=" Cédula de Identidad">';			
				}			

			</script>


		</div>

		<input type="submit" name="banco" id="enviar-ent-banc" value="Agregar Entidades  Bancarias">

	</form>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

		<div class="box-row-center">

			<h2>Configurar Consulta:</h2>
			
			<input type="text" name="especialidad" value=" Especialidad">
			<input type="text" name="consulta_nombre" value=" Nombre de la consulta">
			<input type="text" name="consultorio" value=" Consultorio">
			<input type="text" name="direccion" value=" Dirección del Consultorio">
			<input type="text" name="duracion_consulta" value=" Duración de la consulta">			

		</div>

		<div>
			
			<button type="button" onclick="bankplus3();" id="btnPlus3">Agregar más Consultas</button>

			<div id="plus3">				
			</div>

			<script type="text/javascript">

				function bankplus3(){

					document.getElementById('plus3').innerHTML = '<h2>Agregar más Consultas:</h2><input type="text" name="especialidad" value=" Especialidad"><input type="text" name="consulta_nombre" value=" Nombre de la consulta"><input type="text" name="consultorio" value=" Consultorio">			<input type="text" name="direccion" value=" Dirección del Consultorio"><input type="text" name="duracion_consulta" value=" Duración de la consulta">';			
				}			

			</script>

			<button type="button" onclick="bankplus4();" id="btnPlus4">Agregar más Consultas</button>

			<div id="plus4">				
			</div>

			<script type="text/javascript">

				function bankplus4(){

					document.getElementById('plus4').innerHTML = '<h2>Agregar más Consultas:</h2><input type="text" name="especialidad" value=" Especialidad"><input type="text" name="consulta_nombre" value=" Nombre de la consulta"><input type="text" name="consultorio" value=" Consultorio">			<input type="text" name="direccion" value=" Dirección del Consultorio"><input type="text" name="duracion_consulta" value=" Duración de la consulta">';			
				}			

			</script>

		</div>

		<div class="box-row-center">

			<h2>Duración de la consulta:</h2>

			<select>
			  <option value="30">30 Minutos</option>
			  <option value="45">45 Minutos</option>
			  <option value="1hora">1 Hora</option>
			  <option value="2horas">2 Horas</option>
			</select>

		</div>

		<input type="submit" name="banco" id="enviar-ent-banc" value="Configurar Consultas">

	</form>

	<!--<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

		<div class="box-row-center">

			<h2>Duración de la consulta:</h2>

			<select>
			  <option value="30">30 Minutos</option>
			  <option value="45">45 Minutos</option>
			  <option value="1hora">1 Hora</option>
			  <option value="2horas">2 Horas</option>
			</select>

		</div>

		<input type="submit" name="banco" id="enviar-ent-banc" value="Agregar Duración de la Consulta">

	</form-->
	
	
</div>


	


