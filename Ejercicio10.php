<?php
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $ciudades) {
  echo "Las ciudades de $pais son:";
  foreach ($ciudades as $unaCiudad) {
    echo "<ul>";
    echo "<li>";
    echo "$unaCiudad<br>";
    echo "</li>";
    echo "</ul>";
  }
}
