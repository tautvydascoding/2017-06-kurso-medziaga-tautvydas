<?php

//Cia php kodas
echo "Labas rytas";

$name = "Tomas";

echo "Mano vardas $name <br>"; // IDEA: kabutese "" ispauzdina kintamuosius
echo 'mano vardas $name <br>'; // IDEA:  '' kabutes neispauzdina kintamuju

echo "Name`s <br />";
echo "name\`s \$a <br />";

define("DATA_BASE_NAME", "DB_povilai");
define("NUMBER_OF_ARTICLES", 6);

echo "Musu duomenu base " . DATA_BASE_NAME . " atvaizduoja " . NUMBER_OF_ARTICLES . " straipsnius <br />";


$lname = "TOmka";
if (strlen($lname) <= 20 ) {
  echo "pavarde trumpesne nei 20 simboliu <br />";
  if ($lname === "tomka") {
    echo "pavarde tomka";
  } elseif ($lname === "tomka") {
    echo "pavarde tomka";
  }
} else {
  echo "pavarde ilgesne nei 20 simboliu <br />";
}
$i = 0;  // IDEA: pirma atlieka ir tik tada tikrina
do {
  # code...

  $i++;
} while ($i < 10);

// IDEA:  forreach - darbui su masyvais
$names = [];
foreach ($names as $name) {
echo $name;
}

?>
