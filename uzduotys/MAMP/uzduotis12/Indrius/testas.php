<?php






$vardas = "Tomas";

echo " mano vardas $vardas <br>";
echo " Kieno vardas $vardas <br>";


define("DATABASENAME", "DB_valio");
define("NUMBEROFARTICLES",6);

echo "Musu duomenu baze " . DATABASENAME . " atvaizduoja " . NUMBEROFARTICLES . " straipsnius ";

$lname ="TOmka";
if (strlen($lname) <= 20) {
  echo "Pavarde trumpesne nei 20 simboliu <br>";
  if ($lname === "Tomka"){
    echo "Pavarde Tomka";
  } elseif ($lname === "TOmka") {
  echo "Pavarde TOmka";
  }
} else {
  echo "Pavarde ilgesne nei 20 simboliu <br>";
}

$i = 0;
do {

  $i++;
} while ($i <=10);

// FOREACH-darbui su masyvais //
$names = [];
foreach ($names as $name) {
  echo $name;








}










?>
>>>>>>> 6bcb0b3ff5a4f1ca01c1e501053ec17d1e23281b
