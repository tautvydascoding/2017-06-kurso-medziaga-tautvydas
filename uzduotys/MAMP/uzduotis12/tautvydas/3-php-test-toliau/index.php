<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php echo"  <h1>test PHP arrays</h1>" ?>


    <?php
    // $aa = array("Tomas", "Koliutaiciukaitis", 65);
    // $human = array("name" => "Tomas", "lname" => "Tomulaitokas", "age" => 13);
    // echo "Masyvas. Vardas: " . $human['name'] . "<br />";
    // print_r($human);
    // $human[0] = $aa;
    // // arba
    // $human["pusbrolis"] = $aa;
    //
    // print_r($human);

    echo "<br /><br />";

    //========================================================
    // uzduotis issaugoti uzsakymo duomenis kaip masyvo elementus
    $uzsakymai = array();
    $failas = fopen("./tekstas.txt", "r") or die ("tekstas.txt failas nerastas!");
    // skaitysime faila po 1 eilute, tol kol nesutiksime failo pabaigos simbolio
    while (  !feof($failas)) {
        $eil = fgets($failas) ;
        echo "<br />";
        // echo $eil . "<br>"; // isvedame viena eilute is failo
        // suskaldome eilute kas skirikli ":" ir "/"
        $preke = explode(":", $eil);
        print_r($preke);

        array_push($uzsakymai, $preke);
    }
    fclose($failas); // uzdaromas failas (atlaisvinate RAM atminti)

echo "<br /> UASAKYMAI:";
echo "<br />";
  print_r($uzsakymai);
     ?>



     <?php
        // foreach ($uzsakymai as $itemArray) {
        //   echo "<article>";
        //       echo "<h2>$itemArray[0]</h2>";
        //       echo '<input value="'.  $itemArray[2] . ' "/>';
        //       echo "<br />";
        //       echo '<button>' . $itemArray[1] . "</button>";
        //   echo "</article>";
        // }
     ?>

     <!-- ARBA -->

     <?php
        foreach ($uzsakymai as $itemArray) { ?>

           <article>
               <h2> <?php echo $itemArray[0]; ?> </h2>
               <input value=" <?php echo $itemArray[2]; ?>  "/>
               <br />
               <button>  <?php echo $itemArray[1]; ?> </button>
           </article>

  <?php  }  ?>

  </body>
</html>
