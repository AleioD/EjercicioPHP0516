<?php
  $nombre = "Alejandro";
  $numero = random_int(0, 1);
  $sitiosWeb = [
    "Google" => "https://google.com",
    "Facebook" => "https://facebook.com",
    "Twitter" => "https://twitter.com"
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?=$nombre?></h2>
    <h3>¿Es usted un ganador?</h3>
    <?php if ($numero) : ?>
      <?="SI";?>
    <?php else : ?>
      <?="NO";  ?>
    <?php endif; ?>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($sitiosWeb as $unSitio => $url) : ?>
      <li>
        <a href="<?=$url?>"><?=$unSitio?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
