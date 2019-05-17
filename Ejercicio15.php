<?php
$ceu = [
"Argentina" => [
  "ciudades" => ["Buenos Aires", "Córdoba", "Santa Fé" ],
  "esAmericano" => true],
"Brasil" => [
  "ciudades" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "esAmericano" => true],
"Colombia" => [
  "ciudades" => ["Cartagena", "Bogota", "Barranquilla"],
  "esAmericano" => true],
"Francia" => [
  "ciudades" => ["Paris", "Nantes", "Lyon"],
  "esAmericano" => false],
"Italia" => [
  "ciudades" => ["Roma", "Milan", "Venecia"],
  "esAmericano" => false],
"Alemania" => [
  "ciudades" => ["Munich", "Berlin", "Frankfurt"],
  "esAmericano" => false]
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($ceu as $pais => $valor) : ?>
      <?php if ($valor["esAmericano"] == true) : ?>
        <?="Las ciudades de $pais son:"?>
        <ul>
          <?php foreach ($valor["ciudades"] as $unaCiudad) : ?>
            <li>
              <?=$unaCiudad?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endforeach; ?>
  </body>
</html>
