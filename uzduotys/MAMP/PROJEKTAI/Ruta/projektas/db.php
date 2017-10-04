<?php

      echo "db.php";

      define('HOST', 'localhost');
      define('DB_USERNAME', 'ruta');
      define('DB_PASSWORD', 'ruta');
      define('DB_NAME', 'rutatravels');


      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if ( $connection) {
          echo " prisijungete sekmingai <br />";
        } else {
          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        }
        return $connection;
      }

      connect_DB();

      function getArticles($amount = 3 ) {
            $sql = "SELECT  * FROM articles LIMIT $amount";
            $connect = connect_DB();
            $results = mysqli_query($connect, $sql);

            if( !$results) {
              echo "Neapvyko rasti  straipsniu!!! ". mysqli_error($connect) . " <br>";
           }  else {
              // kadangi mums grista daug duomenu, juos reik sudalinti dalimis
              // mysqli_num_rows - suskaldysime result'atus eilutemis ir  tikriname ar radome kazka pagal uzklausa
              mysqli_num_rows($results);
           }
            return $results;
      }
      $allArticles = getArticles(3);
      print_r($allArticles);
      $data = mysqli_fetch_assoc($results);

?>
