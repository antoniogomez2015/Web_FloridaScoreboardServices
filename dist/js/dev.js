

/*///////////////////////////////////////////////////////////////////////////////////////*/

/*Mobile First*/

$(document).ready(function(){

	/*///////////////////////////////////////////////////////////////////////////////////////*/

	//loads comportamientos para diferentes dispositivos

	if(screen.width <= 450){

		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/ayuda
		$('#footer #help').click(function(){

			$('#load').load('dist/php/load_help.php');			

			$('#load').show('slowUp');

		});


		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/contacto
		$('#footer #contact').click(function(){

			$('#load').load('dist/php/load_contacto.php');			

			$('#load').show('slowUp');

		});		

	}else if(screen.width > 450 && screen.width <= 1100){

		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/ayuda
		$('#footer #help').click(function(){

			$('#load').load('dist/php/load_help.php');			

			$('#load').show('slowUp');

		});


		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/contacto
		$('#footer #contact').click(function(){

			$('#load').load('dist/php/load_contacto.php');			

			$('#load').show('slowUp');

		});

	}else if(screen.width > 1280){

		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/ayuda
		$('#footer #help').click(function(){

			$('#tops').load('dist/php/load_help_dt.php');			

		});


		//----------------------------------------------------------------------------

		//acción para carga de la sección de footer/contacto
		$('#footer #contact').click(function(){

			$('#tops').load('dist/php/load_contacto_dt.php');						

		});		
	}

	/*///////////////////////////////////////////////////////////////////////////////////////*/


	//----------------------------------------------------------------------------

	//acción para carga de la sección de header/más opciones
	$('#sesion #menu').click(function(){

		$('#load').load('dist/php/load_menu_top_plus.php');			

		$('#load').show('slowDown');

	});


	//----------------------------------------------------------------------------

	//acción para carga de la sección de header/especialidades
	/*$('#search #op #cat').click(function(){

		$('#load').load('dist/php/load_index_cat.php');

		$('#load').show('slowUp');

	});*/

	
	//----------------------------------------------------------------------------
	
	//acción para carga de la sección de usuario registrado
	$('#user').click(function(){

		$('#load').load('dist/php/load_company.php');

		$('#load').show('slowDown');		
		
	});


	//----------------------------------------------------------------------------
	
	//reload el sitio web, a través, del logo	
	$('#id').click(function(){

		location.reload();
		//$('#tops').load('dist/php/tops.php');
		

	});


	//----------------------------------------------------------------------------

	//mostrar lightbox y cargar contenido en éste
	$('#tops #Lsocres').click(function(){
		
		$('#hv').load('dist/php/load_scores_hover.php');

		$('#hv').show();
		
	});

	$('#tops #Ldisplays').click(function(){
		
		$('#hv').load('dist/php/load_scores_hover.php');

		$('#hv').show();
		
	});
		

	//----------------------------------------------------------------------------
	
	//acción para la navegación directa al level 2, de scoreboards
	$('#dt #scores img').click(function(){

		$('#tops').load('dist/php/scores_services_scoreboards.php');
				
	});

	//acción para la navegación directa al level 2, de scoreboards
	$('#dt #displays img').click(function(){

		$('#tops').load('dist/php/scores_services_displays.php');
				
	});	



	//carga de la sección scores mantenimiento
	$('#pTops h3').click(function(){

		$('#hv').load('scr.php');

	});

	//cerrar el lightbox, clickando fuera
	$('#hv').click(function(){		

		$('#hv').hide();	

	});

	//proof carga de level 2
	$('#hv_tags').click(function(){

		$('#tops').load('dist/php/ser1.php');

	});



	///////////////////////////////////////////////////////////////////////

	$('#scores').click(function(){

		$('#tops').load('dist/php/scores_services.php');

	});

	///////////////////////////////////////////////////////////////////////

	//----------------------------------------------------------------------------
	
	//acción para del logo que va inicio de la versión desktop
	$('header nav #logo').click(function(){

		location.reload();
				
	});

	//acción para el menú superior "home", en desktop
	$('header nav #topips div:nth-of-type(1)').click(function(){

		location.reload();
				
	});

	//acción para el menú superior "About Us", en desktop
	$('header nav #topips div:nth-of-type(2)').click(function(){

		$('#tops').load('dist/php/load_L3_About_Us.php');
				
	});

	//acción para el menú superior "Services", en desktop
	$('header nav #topips div:nth-of-type(3)').click(function(){

		$('#tops').load('dist/php/load_L3_Services.php');
				
	});

	//acción para el menú superior "Location", en desktop
	$('header nav #topips div:nth-of-type(4)').click(function(){

		$('#tops').load('dist/php/load_contacto_dt.php');
				
	});

	//acción para el menú superior "Contact", en desktop
	$('header nav #topips div:nth-of-type(5)').click(function(){

		$('#tops').load('dist/php/load_form_c.php');
				
	});



	///////////////////////////////////////////////////////////////////////

	//----------------------------------------------------------------------------
	
	//acción para tipos de servicios de la versión desktop
	$('#tops #proNav .d_top1').click(function(){

		$('#tops').load('dist/php/load_L3_Maintenance.php');
				
	});

	//acción para tipos de servicios de la versión desktop
	$('#tops #proNav .d_top2').click(function(){

		$('#tops').load('dist/php/load_L3_Service.php');
				
	});

	//acción para tipos de servicios de la versión desktop
	$('#tops #proNav .d_top3').click(function(){

		$('#tops').load('dist/php/load_L3_Support.php');
				
	});

	//acción para tipos de servicios de la versión desktop
	$('#tops #proNav .d_top4').click(function(){

		$('#tops').load('dist/php/load_L3_Repairs.php');
				
	});

	//acción para tipos de servicios de la versión desktop
	$('#tops #proNav .d_top5').click(function(){

		$('#tops').load('dist/php/load_L3_Advisory.php');
				
	});


	///////////////////////////////////////////////////////////////////////

	//----------------------------------------------------------------------------
	
	//acción para cargar secciones de footer, desktop
	/*$('#footer #help_dt').click(function(){

		$('#tops').load('dist/php/load_help_dt.php');
				
	});*/

	//acción para cargar secciones de footer, desktop
	/*$('#footer #contact_dt').click(function(){

		$('#tops').load('dist/php/load_contacto_dt.php');
				
	});*/

  	

});


