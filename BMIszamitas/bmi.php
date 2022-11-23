<?php

echo <<<EOT

<h1>Testtömegindex (BMI)</h1>

<meta charset="utf-8">
<form action="szamitas.php" method="post">
<label>Neme:</label>
<input type="text" name="neme"></input><br>
<label>Testsúlya (kg):</label>
<input type="text" name="testsuly"></input><br>
<label>Testmagassága (m):</label>
<input type="text" name="testmagassag"></input><br>

<button type="submit">Kalkulál</button>



EOT;

?>