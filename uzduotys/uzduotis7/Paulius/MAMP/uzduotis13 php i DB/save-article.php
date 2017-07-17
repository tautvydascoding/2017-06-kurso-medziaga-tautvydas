<?php
include_once("db.php");


  //uzduotis: isvesti title ir contnet ivestus laukus
print_r($_GET);

echo "title: " . $_GET["pavadinimas"] . "<br>";
echo "title: " . $_GET["email"] . "<br>";

$pavadinimas = $_GET["pavadinimas"];
$email = $_GET["email"];

kurtiSkelbima($pavadinimas, $email);
