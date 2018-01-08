
<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal
	
	$('#close').click(function(){

		$('#load').hide('slow');

	});


	//----------------------------------------------------------------------------

	//acción de prueba para cargar la sección del panel del cliente ó médico
	/*$('#f_mobile div').click(function(){

		$('#load').load('dist/php/load_client_panel.php');			

		$('#load').show('slowUp');

	});*/

</script>


<div id="close"><span class="icon-cancel-circle"></span></div>


<div id="panel">

	<picture>

		<source srcset="dist/img/general/mobileFirst/panel_mobile.jpg" alt="Panel Dacktronics" media="(min-width: 1200px)" class="logo_desktop">

		<source srcset="dist/img/general/mobileFirst/panel_mobile.jpg" media="(min-width: 600px)" class="logo_tablet">

		<source srcset="dist/img/general/mobileFirst/panel_mobile.jpg" media="(min-width: 340px)" class="logo_mobile">

			
		<img src="dist/img/general/mobileFirst/panel_mobile.jpg" alt="Panel Dacktronics" class="logo_base">

	</picture>

</div>


<div id="f_mobile">	

	<div class="teg" class="box-row">

		<span class="icon-briefcase"></span>
		
		<h3>Technical Assistance.</h3>		

	</div>


	<div class="teg" class="box-row">

		<span class="icon-binoculars"></span>
		
		<h3>Faq.</h3>		

	</div>


</div>