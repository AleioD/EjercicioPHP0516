<?php
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
"Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
"Francia" => ["Paris", "Nantes", "Lyon"],
"Italia" => ["Roma", "Milan", "Venecia"],
"Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
/*
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
*/
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($ceu as $pais => $ciudades) : ?>
      <?="Las ciudades de $pais son:"?>
      <ul>
        <?php foreach ($ciudades as $unaCiudad) : ?>
          <li>
            <?=$unaCiudad?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </body>
</html>
