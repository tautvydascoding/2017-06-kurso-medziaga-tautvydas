<?php

echo " labutaitis";          // labutaitis
echo "<h1>labutaitis</h1> "; // <h1>labutaitis</h1>


 $vardas = "Tomas";

echo "Mano vardas $vardas  <br>" ; // " kabuteje isspaudina kintamuosius
echo 'Mano vardas $vardas  <br>'; // ' kabutes NEISSPAUSDINA kintamuju
// Mano vardas Tomas
// Mano vardas $vardas

// echo 'Name's    <br>';  // klaida ' nes nutraukiamos kabutes
echo 'Name\'s    <br>';

define("DATA_BASE_NAME", "DB_povilai");
define("NUMBER_OF_ARTICLES", 6);

echo "Musu duomenu base " . DATA_BASE_NAME . " atvaizduoja " . NUMBER_OF_ARTICLES . " straipsnius <br>";


$lname = "TOmka";
if (strlen($lname)  <= 20) {
  echo "Pavarde trumpesne nei 20 simboliu <br>";
  if ($lname === "Tomka") {
    echo "Pavarde  Tomka";
  } elseif ($lname === "TOmka") {
      echo "Pavarde  TOmka";
  }
} else {
  echo "Pavarde ilgiasne nei 20 simboliu <br>";
}

$i = 0;
// pirma atlieka ir tik po to itkrins ar atlikti dar kart
do {
  // code ...

  $i++;
} while ($i < 10)


// FOREACH - darbui su masyvais
// foreach ($variable as $key => $value) {
//   # code...
// }
$names = [];
foreach ( $names as $name) {
  echo $name;     // js $names[x]
}





 ?>
