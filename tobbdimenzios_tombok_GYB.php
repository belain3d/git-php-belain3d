<body>
<?php
echo "Gyenes Béla:)";
echo "<h1>Termékek nevei és árai külön tömbben</h1>";
$TermekNev=array("vadalma","vadkörte", "Vilmos körte", "Ceglédi óriás
kajszi","Ligeti óriás kajszibarack");
$EgysegAr=array(125.4,873, 44, 99.9, 132);
echo "<br>"; print_r($TermekNev) ;
echo "<br>"; print_r($EgysegAr) ;
echo "<br>";
echo "<h1>Termékek nevei és árai egy több dimenziós tömbben</h1>";
$Termek[0][0]="vadalma";
$Termek[0][1]="125.4";
$Termek[1][0]="vadkörte";
$Termek[1][1]="873";
$Termek[2][0]="Vilmos körte";
$Termek[2][1]="44";
$Termek[3][0]="Ceglédi óriás kajszi";
$Termek[3][1]="99.9";
$Termek[4][0]="Ligeti óriás kajszibarack";
$Termek[4][1]="132";
print_r($Termek);echo "<br>";
for ($i=0; $i<count($Termek); $i++) {echo "<br>".$Termek[$i][0]." =
".$Termek[$i][1]." Ft";}
?>
</body>