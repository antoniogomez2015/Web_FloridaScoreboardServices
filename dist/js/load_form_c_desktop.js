//lógica de la sección de enviar mensaje de contacto versión desktop
$('.message').click(function(){
	$('#tops').load('dist/php/load_form_c.php');
});


if(screen.width <= 450){
	
	$('#form_c #form_c_b').click(function(){

		$('#load').load('dist/php/load_contacto.php');

		$('#load').show('slowDown');

	});

}else if(screen.width > 450 && screen.width <= 1100){

	$('#form_c #form_c_b').click(function(){

		$('#load').load('dist/php/load_contacto.php');

		$('#load').show('slowDown');

	});

}else if(screen.width > 1280){

	$('#form_c #form_c_b').click(function(){

		$('#tops').load('dist/php/load_contacto_dt.php');		

	});

}



