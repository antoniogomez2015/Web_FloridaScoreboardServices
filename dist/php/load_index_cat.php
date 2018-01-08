
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

<div id="index_dir">
	
	<div>		
		<h2>Odontología</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Dermatólogos</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Ginecólogos</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Oftanmólogos</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Oncología</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Endocrino</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Traimatólogo</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	<div>		
		<h2>Terapeutas</h2>
		<h3>Consultorios</h3>
		<h3>Clínicas y Especialistas</h3>			
	</div>

	
</div>
