<?php
$ceu = [
  "Italia"=>"Roma",
  "Luxembourg"=>"Luxembourg",
  "Bélgica"=>"Bruselas",
"Dinamarca"=>"Copenhagen",
"Finlandia"=>"Helsinki",
"Francia" =>"Paris",
"Slovakia"=>"Bratislava",
"Eslovenia"=>"Ljubljana",
"Alemania" => "Berlin",
"Grecia" => "Athenas",
"Irlanda"=>"Dublin",
"Holanda"=>"Amsterdam",
"Portugal"=>"Lisbon",
"España"=>"Madrid",
"Suecia"=>"Stockholm",
"Reino Unido"=>"London",
"Chipre"=>"Nicosia",
"Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague",
"Estonia"=>"Tallin",
"Hungría"=>"Budapest",
"Latvia"=>"Riga",
"Malta"=>"Valletta",
"Austria" => "Vienna",
"Polonia"=>"Warsaw",
] ;

foreach ($ceu as $pais => $capital) {
  echo "La capital de $pais es $capital<br>";
}
