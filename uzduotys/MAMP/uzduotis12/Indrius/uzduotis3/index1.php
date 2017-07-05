<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>test PhP arrays</h1>

    <?php

  // $aa = array ("Tomas", "Smith", 60);
  // $human = array("name" => "Tomas ", "lname" => "Tominas", "age" =>18);
  // echo "Masyvas. Vardas: " . $human['name'] . "<br />";
  // print_r($human);
  // $human[0] = $aa;
  // $human["pusbrolis"] = $aa;
  //
  // print_r($human);
  //
  // echo "<br />";
  //
  // $failas = fopen("./lor.txt" , "r") or die ("lor.txt failas nerastas!");
  //
  // while ( !feof($failas)) {
  //  echo fgets($failas); //isvedam viena eilute is failo
  // }
  //   fclose($failas); //uzdaromas failas (atlaisvinam RAM atminti)

  $uzsakymai = array();
  $failas = fopen("./lor.txt" ,"r") or die ("lor.txt failas nerastas");

    while ( !feof($failas)) {
      $eil = fgets($failas);
      echo "<br />";

      $preke =explode(":", $eil);
      print_r($preke);

      array_push($uzsakymai, $preke);
  }
fclose($failas);

echo "<br /> UZSAKYMAI:";
echo "<br />";
print_r($uzsakymai);

?>

<div class="preke">
  <h2><?php echo $uzsakymai[1][0] ?></h2>

</div>

<?php
foreach ($uzsakymai as $itemArray) { ?>

  <article>
  <h2>$itemArray[0]</h2>
   <inpute value=" <?php echo $itemArray[2]; ?> "/>
   <br />
  <button> <?php echo $itemArray[1]; ?> </button>
</article>

  <?php } 
  ?>



  </body>
</html>
