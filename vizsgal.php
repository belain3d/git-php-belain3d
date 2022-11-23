<?php     
     $szam1 = $_POST['beker'];
     if ($szam1 == 0) {
          echo 'Nullát adott meg!';
     }
     elseif (($szam1 % 2) == 0) {
          echo 'A megadott szám páros.';
          if ((($szam1 % 4) == 0) and (($szam1 % 6) == 0)) {
               echo 'A szám osztható 24-gyel.';
          }
          elseif (($szam1 % 4) == 0) {
               echo 'A szám osztható 4-gyel.';
          }
          elseif (($szam1 % 6) == 0) {
               echo 'A szám osztható 6-tal.';
          }
     }
     elseif (($szam1 % 2) == 1) {
          echo 'A megadott szám páratlan.';
          if ((($szam1 % 3) == 0) and (($szam1 % 6) == 0)) {
               echo 'A szám osztható 3-mal.';
          }
          elseif (($szam1 % 5) == 0) {
               echo 'A szám osztható 5-tel.';
          }
          elseif (($szam1 % 9) == 0) {
               echo 'A szám osztható 9-cel.';
          }
     }
     else {
          echo 'Nem számot adott meg!';
     }
?>