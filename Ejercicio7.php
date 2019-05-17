<?php
$array = [
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100),
  random_int(0,100)
];

$numerosPares = 0;

foreach ($array as $valor) {
  if ($valor % 2 == 0) {
    $numerosPares = $numerosPares + 1;
  }
}
var_dump($array);
echo "$numerosPares";
