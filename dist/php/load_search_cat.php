
<script type="text/javascript">
	
	//----------------------------------------------------------------------------

	//acción de cerrar ventana modal

	$('#close').click(function(){

		$('#load').hide('slow');

	});


	//----------------------------------------------------------------------------

	//acción para cargar el contenido de categorías coincidentes

	$('#cb input').click(function(){

		$('#load').load('dist/php/load_index_cat.php');	

		document.getElementById('cb').style.margin = "40px 0px 0px 0px";		

	});


</script>


<div id="close"><span class="icon-cancel-circle"></span></div>


<form id="cb">
		
		<input type="text" name="" placeholder="  Busque aquí">

</form>		