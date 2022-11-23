<?php

$neme = $_POST['neme'];
$testsuly = $_POST['testsuly'];
$testmagassag = $_POST['testmagassag'];
$BMI = $testsuly/($testmagassag*$testmagassag);

if ($neme == "Férfi") {
    echo "Kedves Uram!<br>";
}

elseif ($neme == "Nő") {
    echo "Kedves Hölgyem!<br>";
}

else {
    echo "Kedves (nem adott meg nemet)!<br>";
}

echo "Az Ön BMI indexe: ";
echo $BMI;
echo " alkata ";

if ($neme == "Nő") {
    if ($BMI < 18.5) {
        echo "sovány";
    }

    elseif (18.6 < $BMI && $BMI < 24) {
        echo "normál";
    }
    elseif (24.1 < $BMI && $BMI < 28.9) {
        echo "túlsúlyos";
    }
    elseif ($BMI > 29) {
        echo "elhízott";
    }
}

elseif ($neme == "Férfi") {
    if ($BMI < 18.5) {
        echo "sovány";
    }
    elseif (18.6 < $BMI && $BMI < 25) {
        echo "normál";
    }
    elseif (24.1 < $BMI && $BMI < 29.9) {
        echo "túlsúlyos";
    }
    elseif ($BMI > 30) {
        echo "elhízott";
    }
}

else {
    if ($BMI < 18.5) {
        echo "sovány";
    }
    elseif (18.6 < $BMI && $BMI < 25) {
        echo "normál";
    }
    elseif (24.1 < $BMI && $BMI < 29.9) {
        echo "túlsúlyos";
    }
    elseif ($BMI > 30) {
        echo "elhízott";
    }
}

echo "<br>Köszönöm, hogy használta a programot, remélem elégedett volt a használatával.";


?>