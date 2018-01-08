
<!--logo-->

<script type="text/javascript">

	var objetos = new Array();
	objetos[0] = "dist/img/general/desktop/main1.jpg";
	objetos[1] = "dist/img/general/desktop/main2.jpg";
	objetos[2] = "dist/img/general/desktop/main3.jpg";
	objetos[3] = "dist/img/general/desktop/main4.jpg";
	objetos[4] = "dist/img/general/desktop/main5.jpg";

	function aleatorio() {
		var azar = Math.floor(Math.random() * objetos.length);
		document.images["imagen"].src = objetos[azar];
	}

	aleatorio();		

</script>

<div id="id">

	<picture>

		<source srcset="dist/img/general/mobileFirst/logo_mobile.png" alt="producto1" media="(min-width: 1200px)" class="logo_desktop">

		<source srcset="dist/img/general/tablets/logo_tablets.png" media="(min-width: 450px)" class="logo_tablet">

		<source srcset="dist/img/general/mobileFirst/logo_mobile.png" media="(min-width: 340px)" class="logo_mobile">

			
		<img src="dist/img/general/mobileFirst/logo_mobile.png" alt="Logotipo" class="logo_base">

	</picture>

</div>

<div id="enc">

	<img src="" name="imagen" alt="Dacktronics" />

</div>