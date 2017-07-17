<?php
    
      define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');

      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if ( $connection) {
          echo "Prisijungti pavyko <br />";
        } else {
          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        }
        return $connection;
      }

      // connect_DB();

      function kurtiSkelbima($pavadinimas, $data_, $email, $miestas, $tipas, $registracija, $aprasymas) {
          $sql = "INSERT INTO skelbimai (pavadinimas, data_, email, miestas, tipas, registracija, aprasymas,
unikalus, nuoroda, telnr, laisvas1, laisvas2) VALUES ('$pavadinimas', '$data_', '$email', '$miestas', '$tipas', '$registracija', '$aprasymas',
'$unikalus', '$nuoroda', '$telnr', '$laisvas1', '$laisvas2' )";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if( !$status) {
            echo "Skelbimo ideti nepavyko:" . mysqli_error($connect) . " <br>";
         } else {
              header("Location: redirect.php");
die();
         }
      }

//print_r($_GET);
//
//echo "title: " . $_GET["pavadinimas"] . "<br>";
//echo "title: " . $_GET["data_"] . "<br>";
//echo "title: " . $_GET["email"] . "<br>";
//echo "title: " . $_GET["miestas"] . "<br>";
//echo "title: " . $_GET["tipas"] . "<br>";
//echo "title: " . $_GET["registracija"] . "<br>";
//echo "title: " . $_GET["aprasymas"] . "<br>";

$pavadinimas = $_GET["pavadinimas"];
$data_ = $_GET["data_"];
$email = $_GET["email"];
$miestas = $_GET["miestas"];
$tipas = $_GET["tipas"];
$registracija = $_GET["registracija"];
$aprasymas = $_GET["aprasymas"];

kurtiSkelbima($pavadinimas, $data_, $email, $miestas, $tipas, $registracija, $aprasymas);



?>
