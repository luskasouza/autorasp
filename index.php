<?php

	#status
	$on = '<button type="button" class="btn btn-warning">ON &nbsp</button>';
	$off = '<button type="button" class="btn btn-dark">OFF</button>';
	#aprarelhos
	$lamp = @$_POST['lp'];
	$tv   = @$_POST['tv'];
	$pc   = @$_POST['pc'];
	$air  = @$_POST['ar'];

	#form
	$lamp_log = 'off';
	$tv_log = 'off';  
	$pc_log = 'off';  
	$air_log = 'off';

	#status
	if (!empty($lamp)) {
		$s1 = $on;
		$lamp_log = 'on ';
	}else{
		$s1 = $off;
	}

	if (!empty($tv)) {
		$s2 = $on;
		$tv_log = 'on ';
	}else{
		$s2 = $off;
	}

	if (!empty($pc)) {
		$s3 = $on;
		$pc_log = 'on ';
	}else{
		$s3 = $off;
	}

	if (!empty($air)) {
		$s4 = $on;
		$air_log = 'on ';
	}else{
		$s4 = $off;
	}
	
	$space = "\r\n";
	$file = fopen('inter.log', 'w');
	#$str = "lamp: $lamp_log tv: $tv_log pc: $pc_log air: $air_log".$space;
	fwrite($file, $lamp_log.$space);
	fwrite($file, $tv_log.$space);
	fwrite($file, $pc_log.$space);
	fwrite($file, $air_log.$space);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	<title>AutoRasp</title>
	<link rel="shortcut icon" href="icon" />
</head>
<body class="bg-dark bg">
	<div class="d-flex justify-content-center">
		<div class="text-dark">
			<br>
			<h3>AutoRasp</h3>
			<br>
		</div>
	</div>
	<div class="container app">
		<form method="post">
			<div class="container text-light  flex-row mb-3">
				<div class="p-2">
					<input type="radio" name="lp" value="lamp">
					<img src="img/lp.jpg" class="img-thumbnail" width="90px">
					<span>Lamp</span>
					<span class="btn-end">Status: <?php echo $s1; ?></span>
				</div>

				<div class="p-2">
					<input type="radio" name="tv" value="tv">
					<img src="img/tv.jpg" class="img-thumbnail" width="90px">
					<span>TV</span>
					<span class="btn-end">Status: <?php echo $s2; ?></span>
				</div>

				<div class="p-2">
					<input type="radio" name="pc" value="pc">
					<img src="img/pc.jpg" class="img-thumbnail" width="90px">
					<span>PC Desktop</span>
					<span class="btn-end">Status: <?php echo $s3; ?></span>
				</div>

				<div class="p-2">
					<input type="radio" name="ar" value="ar">
					<img src="img/ar.jpg" class="img-thumbnail" width="90px">
					<span>Air</span>
					<span class="btn-end">Status: <?php echo $s4; ?></span>
				</div>
					<input type="reset" name="" value="Desligar todos" class="btn btn-danger btn-end">
			</div>
			
			<div class="d-flex justify-content-center">
				<input type="submit" name="" value="Ligar selecionados" class="btn btn-success">	
			</div>
		</form>
	</div>
</body>
</html>