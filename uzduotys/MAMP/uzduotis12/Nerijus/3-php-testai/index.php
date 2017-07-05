<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mokomes PHP</title>
  </head>
  <body>
<h1>test php</h1>
<?php
$aa = array("Tomas", "Koliutaicis",65 );
$human = array("name" => "Tomas", "lname" => "Tomulaitiokas", "age" => 13);
echo "Masyvas. Vardas" . $human['name'] . "<br /">
print_r($human);

echo "<br /><br />";
$uzsakymai;
$failas = fopen("./tekstas.txt", "r") or die ("tekstas.txt failas nerastas");
// IDEA: skaitysime faila po 1 eilute , tol kol nesutiks failo pabaigos simbolio

while (!feof($failas)) {
  $eil = fgets($failas);
  echo "<br />"
  $preke = explode(":", $eil);
  print_r($preke);

  // echo fgets($failas); // IDEA: isvedame viena eilute is failo
}
fclose($failas) . "<br />"; // IDEA: uzdaromas failas (atlaisviname ram atminti)


$preke = explode(
  "pavadinimas" => $
);
?>
<div class="preke">
<h2><?php echo $uzsakymai[0][0] ?></h2>
</div>

<?php
foreach ($uzsakymai as $itemArray) {
  echo "<article>";
    echo "<h2>$itemArray[$i]</h2>";
  echo '<input value=" "/>';
  echo '<button>' . $itemArray[1];
  echo "</article>";
}

 ?>



  </body>
</html>
