
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

		

	}else if(screen.width > 1280){

		
	}