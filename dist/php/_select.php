<?php		

	$select = array(
		1 => "Enero",
		2 => "Febrero",
		3 => "Marzo",
		4 => "Abril",
		5 => "Mayo",
		6 => "Junio",
		7 => "Julio",
		8 => "Agosto",
		9 => "Septiembre",
		10 => "Obtubre",
		11 => "Noviembre",
		12 => "Diciembre",
	);

	$meses = array(
		1 => 1,
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
		12 => 12,
	);


	if($meses[1] == date('m')){

		echo "<option value='$select[1]'>$select[1]</option>";
		echo "<option value='$select[2]'>$select[2]</option>";
		echo "<option value='$select[3]'>$select[3]</option>";
		echo "<option value='$select[4]'>$select[4]</option>";
		echo "<option value='$select[5]'>$select[5]</option>";
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";

	}elseif($meses[2] == date('m')){

		echo "<option value='$select[2]'>$select[2]</option>";
		echo "<option value='$select[3]'>$select[3]</option>";
		echo "<option value='$select[4]'>$select[4]</option>";
		echo "<option value='$select[5]'>$select[5]</option>";
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";		

	}elseif($meses[3] == date('m')){

		echo "<option value='$select[3]'>$select[3]</option>";
		echo "<option value='$select[4]'>$select[4]</option>";
		echo "<option value='$select[5]'>$select[5]</option>";
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";

	}elseif($meses[4] == date('m')){
		
		echo "<option value='$select[4]'>$select[4]</option>";
		echo "<option value='$select[5]'>$select[5]</option>";
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";

	}elseif($meses[5] == date('m')){			
			
		echo "<option value='$select[5]'>$select[5]</option>";
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[6] == date('m')){			
			
		echo "<option value='$select[6]'>$select[6]</option>";
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[7] == date('m')){			
			
		echo "<option value='$select[7]'>$select[7]</option>";
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[8] == date('m')){			
			
		echo "<option value='$select[8]'>$select[8]</option>";
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[9] == date('m')){			
			
		echo "<option value='$select[9]'>$select[9]</option>";
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[10] == date('m')){			
			
		echo "<option value='$select[10]'>$select[10]</option>";
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[11] == date('m')){			
			
		echo "<option value='$select[11]'>$select[11]</option>";
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}elseif($meses[12] == date('m')){			
			
		echo "<option value='$select[12]'>$select[12]</option>";
			
	}

?>
