
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <h1>Testukas ant PHP MASYVŲ</h1>

   




</body>
    
     <?php
$aa = array("Tomas", "Kolutkietis", 65);
$human = array("name" => "Tomas", "lname" => "Belekas", "age" => 13);
    echo "Masyvas. Vardas: " . $human['name'] . "<br>";
    print_r($human);
    
//    $human[0] = $aa; ////isvedam
    
    $human["pusbrolis"] = $aa;
    print_r($human);
    
    echo "<br> . <br>";
    
    ////////////// skaitom tekstas.txt////////////uzduotis issaugoti uzsakymo duomenis masyve
    
    $uzsakymai = array(); 
    $failas = fopen("./tekstas.txt", "r") or die ("failas nerastas tevai"); ////////r skaito.
    ///////////skaitysim faila po eilute tol kol nesutiksime jo pabaigos.
    while (!feof($failas)){
        $eil = fgets($failas);
        echo"<br>";
//        echo $eil . "<br>";  ///////isvedame viena eilute is failo
        //// suskaldome eilute kas skyrikli ":" ar "/"
          $preke = explode(":",$eil);
        print_r($preke);
        array_push($uzsakymai, $preke);
        echo"<br>UZSAKYME";
        echo"<br>";
        
        
     
        

        
        
        
    }
    fclose($failas); ////////uzdarome faila, atlaisviname RAM atminti.
    
?>
    
    
</html>








    
