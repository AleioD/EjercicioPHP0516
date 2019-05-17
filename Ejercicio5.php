<?php
$nombres = ["Juan", "Santiago", "Andrés", "Nahuel", "Federico"];

for ($i=0; $i < count($nombres) ; $i++) {
  echo "$nombres[$i]<br>";
}

echo "<hr>";

$a = 0;
while($a < count($nombres)) {
  echo "$nombres[$a]<br>";
  $a++;
}

echo "<hr>";

$i = 0;
do {
  echo "$nombres[$i]<br>";
  $i++;
} while ($i < count($nombres));

echo "<hr>";

foreach ($nombres as $unNombre) {
  echo "$unNombre<br>";
}
