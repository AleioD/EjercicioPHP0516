<?php
  $contador5 = 0;
  $tiros = 0;

  while ($contador5 < 6) {
    if (random_int(0 , 1) == 1) {
      $contador5 = $contador5 + 1 ;
    }
    $tiros = $tiros + 1;
  }
  echo "$tiros";

?>
