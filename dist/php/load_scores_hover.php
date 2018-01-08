
<script type="text/javascript">

	//hacer que se pueda hacer click, en el contenido del lightbox, sin que éste se cierre
	$('#pTops').click(function(e){

		e.stopPropagation();

		return false;

	});

	//acción para cargar los servicios ofrecidos de forma independiente
	$('#pTops h3:nth-of-type(1)').click(function(){

		$('#tops').load('dist/php/load_L3_Maintenance.php');

	});

	$('#pTops h3:nth-of-type(2)').click(function(){

		$('#tops').load('dist/php/load_L3_Service.php');

	});

	$('#pTops h3:nth-of-type(3)').click(function(){

		$('#tops').load('dist/php/load_L3_Support.php');

	});

	$('#pTops h3:nth-of-type(4)').click(function(){

		$('#tops').load('dist/php/load_L3_Repairs.php');

	});

	$('#pTops h3:nth-of-type(5)').click(function(){

		$('#tops').load('dist/php/load_L3_Advisory.php');

	});

</script>


<div id="pTops">

	<h3 class="hv_tags">Maintenance</h3>

	<h3 class="hv_tags">Service</h3>

	<h3 class="hv_tags">Support</h3>

	<h3 class="hv_tags">Repairs</h3>

	<h3 class="hv_tags">Advisory</h3>

</div>