<?php

   

      echo "db.php";

      define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');


      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if ( $connection) {
          echo " prisijungete sekmingai <br />";
        } else {
          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        }
        return $connection;
      }
      // connect_DB();

      function kurtiSkelbima($pavadinimas, $data_, $email) {
          $sql = "INSERT INTO skelbimaitest
                  VALUES ('', '$pavadinimas', '$data_', '$email')";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if( !$status) {
            echo "Skelbimo ideti nepavyko:" . mysqli_error($connect) . " <br>";
         } else {
              echo "Skelbimas idetas! <br>";
         }
      }
      // createArticle("Zuvo geles", "Mociutes darzeli istrype vaikai", 1);


 ?>



