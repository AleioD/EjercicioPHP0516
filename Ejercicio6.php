<?php
$array = [
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10),
  random_int(0,10)
];

foreach ($array as $valor) {
  if ($valor == 5) {
    echo "¡Se encontró un 5!";
    break;
  } else {
    echo "$valor<br>";
  }
}
