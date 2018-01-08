
<style type="text/css">
	
	.active{

		/*color: white;*/
		background: green;
	}

</style>


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

	//acción para fijar radio button seleccionado a través, de su label

	$('#cita-m form .row .d label i').click(function(){

		$('#cita-m form .row .d label i').removeClass('active');

		$(this).toggleClass('active');		

	});



</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="cita-m" class="box-row">

	<div id="medico">
		
		<h2>Dr. Carlos Oropeza</h2>

		<h3>Pediatra</h3>

		<p>Centro Médico Las Colinas</p>

	</div>

	
	
	<form id="calendar_1" action="cita_f1.php" method="post" name="calendar_1">
		
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

			
			<!--<i><span class="icon-first" id="prev"></span></i>
			<i><span class="icon-last" id="next"></span></i>-->

		</div>

		<div id="calendar-head" class="box-row">	

			<div class="h">Hora</div>		
			<div class="d">L</div>
			<div class="d">M</div>
			<div class="d">M</div>
			<div class="d">J</div>
			<div class="d">V</div>
			<div class="d">S</div>		

		</div>

		<div class="row" class="box-row">
			<div class="h">7:00<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">7:30<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">8:00<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
		</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">8:30<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">9:00<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">9:30<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">10:00<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">10:30<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">11:00<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">11:30<span> am</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">12:00<span> m</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">12:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">1:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">1:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">2:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">2:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">3:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">3:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">4:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">4:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">5:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>

		<div class="row" class="box-row">
			<div class="h">5:30<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>

		</div>

		<div class="row" class="box-row">
			<div class="h">6:00<span> pm</span></div>
			<div class="d">			
				<?php 
					for($i = 0; $i <= 5; $i++){							
						echo "<label for='r'><i class='fa fa-check' aria-hidden='true'></i></label><input type='radio' name='checkbox' id='r'>";
					}
				?>
			</div>
		</div>	

		<input type="submit" name="CrearCita" value="Crear cita">		
	</form>			
	
</div>


	


