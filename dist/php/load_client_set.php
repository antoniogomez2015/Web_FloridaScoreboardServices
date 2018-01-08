
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


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>

<div id="client_set">
	
	
	<div id="id_client">

		<h2>Pastor Oropeza</h2>

		<h3>Centro Médico Lara</h3>	

	</div>


	<div id="cita_r">
		
		<?php 

			echo "<h2>8:30am</h2><p>Maria Jimenez</p><p>Tratamiento realizado</p><p>Historial Médico</p>";
		?>

	</div>

	<form action="#" method="post" name="hist-p">

		<div><?php echo "Maria Jimenez" ?></div>
		<div><?php echo "8:30am" ?></div>
		<input type="text" name="" placeholder=" Tratamiento realizado">

	</form>
	
</div>
