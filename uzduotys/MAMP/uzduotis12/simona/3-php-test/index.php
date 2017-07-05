<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> test PHP arrays </h1>


<?php
$aa = array("Tomas", "Damjon", 65);
$human=array("name" => "Tomas", "lname" => "Damjonaitis", "age" => 13);
echo "Masyvas. Vardas:". $human["name"] . "<br /> . <br />";
print_r($human);

// Masyvas masyve
$human[0] = $aa;
//ARBA
$human["pusbrolis"] = $aa;

print_r($human);

$failas=fopen("./tekstas.txt", "r") or die ("This document was not found. Please go back and select blablabla");
while ( !feof($failas)) {    //skaitysim failą po vieną eilutę, kol prieisim pabaigą
  echo fgets($failas) ."<br /> . <br />"; //išvedame vien1 eilutę iš failo
}
fclose($failas); //uždaromas failas (atlaisvinam RAM atmintį)
echo "<br />";

//Uzduotis: i6saugoti uzsakymo duomenis kaip masyvo elementus
$uzsakymai=array();
$failas = fopen("./tekstas.txt", "r") or die ("none row");
while ( !feof($failas)) {
  $eil=fgets($failas);
  echo "<br />";
  $preke=explode (":", $eil);
  print_r($preke);
  array_push ($uzsakymai, $preke);
}
fclose($failas); //uzdaromas failas (atsilaisvina RAM)
echo "<br />";
echo "<br />";
  print_r($uzsakymai);


 ?>
<!-- ARBA -->

  <div class="preke">
    <h3><?php echo $uzsakymai [0][0] ?></h3>

<!--PHP versija  -->
  <?php
  foreach ($uzsakymai as $itemArray){
echo "<article>";
echo "<h2>$itemArray[0]</h2>";
echo '<input value="'. $itemArray[2] .'"/>';
echo '<button>' . $itemArray[1] . "</button>";
echo "</article>";
}
?>

<!-- HTML versija -->
foreach ($uzsakymai as $itemArray){
<article>
<h2> <?php echo $itemArray[0]; ?> </h2>
<input value= "<?php echo $itemArray[2]; ?>"/>
<br />
<button> <?php echo $itemArray[1]; ?> </button>
</article>
}


    </form>
  </form>
  </div>





























  </body>
</html>
