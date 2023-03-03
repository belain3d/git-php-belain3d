<!DOCTYPE html>
<html>
<head>
	<title>Bejelentkezés</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
    <div class="bejelentkezes">
	<h1>Bejelentkezés</h1>
	<form method="post" action="sorszam.php">
		<label for="ugytipus">Kérem válasszon ügytípust:</label><br><br>
		<select id="ugytipus" name="ugytipus">
			<option value="1">Vásárlással kapcsolatos ügyek</option>
			<option value="2">Számlázással kapcsolatos ügyek</option>
			<option value="3">Egyéb szolgáltatással kapcsolatos ügyek</option>
			<option value="4">Információkérés</option>
			<option value="5">Reklamáció</option>
		</select>

        <ol>
        <li>Vásárlással kapcsolatos ügyek</li>
        <li>Számlázással kapcsolatos ügyek</li>
        <li>Egyéb szolgáltatással kapcsolatos ügyek</li>
        <li>Információkérés
        <li>Reklamáció</li>
</ol>

		<br><br>
		<input type="submit" value="Választ" class="kozepre">
	</form>
</div>
</body>
</html>
