<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bandom</title>
  </head>
  <body>
    <h1>testuojam php arrays</h1>


    <?php
    // $aa = array("Lukas", "Saulius", 65);
    // $human = array('name' => "Tomas", "lname" =>"Tomulaitis", "age" => 13);
    // echo "Masyvas. Vardas: " . $human['name'] . "<br />";
    // print_r($human);
    // $human["tetis"] = $aa;
    // print_r($human);
    //
    // echo "<br />";
    ////uzduotis//
    $uzsakymai = array();
    $myfile = fopen("tekstas.txt", "r") or die ("tekstas.txt failas nerastas");
    //skaitysim po eilute, kol nesutiksim pabaigos.
    while (!feof($myfile)) {
      $eil = fgets($myfile);
      echo "<br />";
      // echo $eil. "<br />";
      $preke = explode(":", $eil);
      print_r($preke);
      array_push($uzsakymai, $preke);


      // $sarasas = array('preke' => "Tomas", 'kaina' =>"Tomulaitis", "kiekis" => 13, 'komentaras' =>);
      # code...
    }
    fclose($myfile);
    echo "<br /> uzsakymai: ";
    echo "<br />";
    print_r($uzsakymai)
     ?>

     <div class="preke">
       <h2><?php echo $uzsakymai[0][0] ?></h2>
     </div>
     <?php
      foreach ($uzsakymai as $itemArray) {
        echo "<article>";
            echo "<h2>$itemArray[0]</h2>";
            echo ' <input value ="'. itemArray[2] . ' " />';
            echo ' <button>' . $itemArray[1] . "</button>";
        echo "</article>";

      }

      ?>
  </body>
</html>
