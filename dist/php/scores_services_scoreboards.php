<script type="text/javascript">
	
	$(document).ready(function(){

		//----------------------------------------------------------------------------

		//leer más de la sección de loads tops L2
		$('#more').click(function(){
						
			$('.hiden').show();

			$('#more').hide();

			$('#less').show();

		});


		$('#less').click(function(){
					
			$('.hiden').hide();

			$('#more').show();

			$('#less').hide();

		});


		//----------------------------------------------------------------------------

		//acción para ver botones de las secciones de contenido de L2
		$('#topics #ic_tops').click(function(){

			$('#topics').hide();

			$('#c1').show();

			$('#tops_b').show();

		});

		$('#topics #ic_sports').click(function(){

			$('#topics').hide();

			$('#sports').show();

			$('#tops_b').show();

		});

		$('#topics #ic_tec').click(function(){

			$('#topics').hide();

			$('#tec').show();

			$('#tops_b').show();

		});

		$('#topics #ic_setting').click(function(){

			$('#topics').hide();

			$('#opt').show();

			$('#tops_b').show();

		});


		//----------------------------------------------------------------------------

		//acción para volver a los botones de las secciones de contenido de L2
		$('#tops_b').click(function(){

			$('#c1').hide();

			$('#sports').hide();

			$('#tec').hide();

			$('#opt').hide();

			$('#tops_b').hide();

			$('#topics').show();			

		});


		//----------------------------------------------------------------------------

		//acción para ir a la sección L3
		$('#c1 h3:nth-of-type(1)').click(function(){

			$('#tops').load('dist/php/load_L3_Maintenance.php');					

		});

		$('#c1 h3:nth-of-type(2)').click(function(){

			$('#tops').load('dist/php/load_L3_Service.php');					

		});

		$('#c1 h3:nth-of-type(3)').click(function(){

			$('#tops').load('dist/php/load_L3_Support.php');					

		});

		$('#c1 h3:nth-of-type(4)').click(function(){

			$('#tops').load('dist/php/load_L3_Repairs.php');					

		});

		$('#c1 h3:nth-of-type(5)').click(function(){

			$('#tops').load('dist/php/load_L3_Advisory.php');					

		});


		//-------------------------------------------------------------------------

		//acción para ir a Dactronics Scoreboards Catalogue
		$('#opt div').click(function(){

			$('#tops').load('dist/php/load_L3_Maintenance.php');					

		});


	})

</script>

<section id="scores_s">

	<div id="intro">

		<h2>Indoor/Outdoor Scoreboards</h2>

		<p>Repair, Installation & Maintenance. FSS, can repair your scoreboard in time for the next big game.</p>		

		<p>We repair, install and maintain scoreboards for all sports. Scoreboard technology is rapidly evolving and many existing scoreboards are considered obsolete three to four years after installation. However, FSS, and Daktronics has the factory training to repair & service these older scoreboards whether they are incandescent or L.E.D. design. We can have your scoreboard fixed and running in time for your next game.</p>

		<p class="hiden">When it is time for a new timing system we can offer you the latest technology in scoreboards for any sport. New scoreboards can be customized with team colors,  logos & sponsor panels. We can assist you in selecting the graphics and design of your custom scoreboard. Call us to determine what scoreboard solution is right for you.</p>

		<p class="hiden">To ensure the continued reliable operation of your scoreboard, we offer maintenance contracts for your school, facility or an entire district. Don’t wait for your scoreboard to fail before the big game!</p>

		<div id="more">see more..</div>
	    <div id="less">see less..</div>

	</div>

	<div id="tops_b">Go back..</div>

	<div id="topics">

		<div id="ic_tops">Tops</div>
		<div id="ic_sports">Sports</div>
		<div id="ic_tec">Tec</div>
		<div id="ic_setting">Catalogue</div>		

	</div>
	
	<div id="c1" class="box-row-center">

		<h3>Maintenance</h3>
		<h3>Service</h3>
		<h3>Support</h3>
		<h3>Repairs</h3>
		<h3>Advisory</h3>			

	</div>

	<div id="sports">

		<h3>Scorebards by types of sports</h3>
		
		<div>Aquatics</div>
		<div>Baseball</div>
		<div>Basketball</div>
		<div>Cricket</div>
		<div>Football</div>
		<div>Gymnastics</div>
		<div>Hockey</div>
		<div>Lacrosse</div>
		<div>Martial Arts</div>
		<div>Rodeo</div>
		<div>Soccer</div>
		<div>Tennis</div>
		<div>Track</div>
		<div>Volleyball</div>
		<div>Wrestling</div>

	</div>

	<div id="tec">
		
		<div id="sett">

			<h3>Technology</h3>
			
			<div>LED Scoreboards</div>
			<div>PanaView®</div>
			<div>UniView™</div>

		</div>

	</div>

	<div id="opt">
		
		<h3>Personalize your scoreboard with striping and 50 color choices</h3>

		<a href="https://www.daktronics.com/en-us/products/sports" target="_blank">Daktronics LED Scoreboard</a>
		
	</div>
	
</section>