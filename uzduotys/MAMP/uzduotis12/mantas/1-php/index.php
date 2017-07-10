<?php

//Cia php kodas
echo "Labas rytas";
  $vardas = "Tomas";

echo "labas $vardas <br>"; //"dvigubose kabutese isspausdina kintamuosius"
echo 'labas $vardas <br>'; // ' isjungia kintamuosius.
//br atskiria teksta atskiroje eiluteje

echo "Name's <br />";
echo "Name's \$a <br>";

define("DATA_BASE_NAME", "DB_povilai");
define("NUMBER_OF_ARTICLES", 6);

echo "Musu duomenu baze " . DATA_BASE_NAME . " atvaizduoja " . NUMBER_OF_ARTICLES . " straipsnius ";

$lname = "TOmka";
if (strlen($lname) <= 20) {
  echo "Pavarde trumpesne nei 20 simboliu <br />";
  if ($lname === "Tomka") {
    echo " Pavarde tinkama";
  } elseif ($lname ==="TOmka") {
    echo " Dvi didziosios raides <br />";
  }
} else {
  echo "pavarde ilgesne nei 20 simboliu <br />";
}
$i = 0;
do {

  $i++;
} while ($i < 10)

//foreach ciklas - darbui su masyvais skirtas
$names = [];
foreach ( $names as $name) {
  # code... echo $name;
}
?>
