<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#close').click(function(){

		$('#load').hide('slow');	

	});


	//----------------------------------------------------------------------------

	//acción para carga de la sección de header/especialidades
	$('#index_dir div').click(function(){

		$('#load').load('dist/php/load_cita_f2.php');

		$('#load').show('slowUp');

	});


	//----------------------------------------------------------------------------

	//acción para carga de la sección clientess atendidos por semana
	$('#btn').click(function(){

		$('#load').load('dist/php/load_client_set.php');

		$('#load').show('slowUp');

	});


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="client_panel">	

	<form id="calendar_1" action="" method="post" name="calendar_1">
		
		<div id="mes" class="box-row">

			<h2>Seleccione el Mes: </h2>

			<select>
				
				<?php		

					$select = array(
						1 => "Enero",
						2 => "Febrero",
						3 => "Marzo",
						4 => "Abril",
						5 => "Mayo",
						6 => "Junio",
						7 => "Julio",
						8 => "Agosto",
						9 => "Septiembre",
						10 => "Obtubre",
						11 => "Noviembre",
						12 => "Diciembre",
					);

					$meses = array(
						1 => 1,
						2 => 2,
						3 => 3,
						4 => 4,
						5 => 5,
						6 => 6,
						7 => 7,
						8 => 8,
						9 => 9,
						10 => 10,
						11 => 11,
						12 => 12,
					);


					if($meses[1] == date('m')){

						echo "<option value='$select[1]'>$select[1]</option>";
						echo "<option value='$select[2]'>$select[2]</option>";
						echo "<option value='$select[3]'>$select[3]</option>";
						echo "<option value='$select[4]'>$select[4]</option>";
						echo "<option value='$select[5]'>$select[5]</option>";
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";

					}elseif($meses[2] == date('m')){

						echo "<option value='$select[2]'>$select[2]</option>";
						echo "<option value='$select[3]'>$select[3]</option>";
						echo "<option value='$select[4]'>$select[4]</option>";
						echo "<option value='$select[5]'>$select[5]</option>";
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";		

					}elseif($meses[3] == date('m')){

						echo "<option value='$select[3]'>$select[3]</option>";
						echo "<option value='$select[4]'>$select[4]</option>";
						echo "<option value='$select[5]'>$select[5]</option>";
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";

					}elseif($meses[4] == date('m')){
						
						echo "<option value='$select[4]'>$select[4]</option>";
						echo "<option value='$select[5]'>$select[5]</option>";
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";

					}elseif($meses[5] == date('m')){			
							
						echo "<option value='$select[5]'>$select[5]</option>";
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[6] == date('m')){			
							
						echo "<option value='$select[6]'>$select[6]</option>";
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[7] == date('m')){			
							
						echo "<option value='$select[7]'>$select[7]</option>";
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[8] == date('m')){			
							
						echo "<option value='$select[8]'>$select[8]</option>";
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[9] == date('m')){			
							
						echo "<option value='$select[9]'>$select[9]</option>";
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[10] == date('m')){			
							
						echo "<option value='$select[10]'>$select[10]</option>";
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[11] == date('m')){			
							
						echo "<option value='$select[11]'>$select[11]</option>";
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}elseif($meses[12] == date('m')){			
							
						echo "<option value='$select[12]'>$select[12]</option>";
							
					}

				?>
			  
			</select>

		</div>


		<div>

			<h2>Seleccione la Semana: </h2>

			<select>
			  <option value="semana1">Primera semana</option>
			  <option value="semana2">Segunda semana</option>
			  <option value="semana3">Tercera semana</option>
			  <option value="semana4">Cuarta semana</option>
			</select>

		</div>


		<div>

			<h3>Ver las citas por Día: </h3>

			<select>
			  <option value="d_lunes">Ver citas del día Lunes</option>
			  <option value="d_martes">Ver citas del día Martes</option>
			  <option value="d_miercoles">Ver citas del día Miercoles</option>
			  <option value="d_jueves">Ver citas del día Jueves</option>
			  <option value="d_viernes">Ver citas del día Viernes</option>
			  <option value="d_sabado">Ver citas del día Sábado</option>
			</select>

		</div>

		<input type="button" name="CalificarCita" value="Calificar cita" id="btn">


	</form>	

</div>