<!DOCTYPE html>
<html>
<head>
	<title>Sorszám kiadás</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bejelentkezes">
	<h1>Sorszám kiadás</h1>

	<?php
	
	$sorszamok = array(
		1 => 100,
		2 => 200,
		3 => 300,
		4 => 400,
		5 => 500
	);

	$leirasok = array(
		1 => "első",
		2 => "második",
		3 => "harmadik",
		4 => "információkérés",
		5 => "egyéb"
	);

	$ugytipus = $_POST["ugytipus"];

	$kezdo_sorszam = $sorszamok[$ugytipus];
	$sorszam = $kezdo_sorszam + 1;

	$mai_datum = date("Y.m.d. H:i");

	echo "Ön az " . $leirasok[$ugytipus] . " ügytípust választotta.<br>";
	echo "Sorszáma: " . $sorszam . "<br>";
	echo "Mai dátum: " . $mai_datum;
	?>
	</div>
</body>
</html>
