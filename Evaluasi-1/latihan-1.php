<?php

for ($i=1; $i <= 9; $i++) { 
   for ($j=1; $j <= 9; $j++) { 
      if ($i==$i || $j==$j) {
         echo "+";
      } else {
         echo "-";
      }
      // echo "($i, $j) ";
   }
   echo "\n";
}



// for ($i=1; $i <= 9; $i++) { 
//    for ($j=1; $j <= 9; $j++) { 
//       if ($i+$j == 10) {
//          echo "+";
//       } else {
//          echo "-";
//       }
//       echo "($i, $j) ";
//    }
//    echo "\n";
// }