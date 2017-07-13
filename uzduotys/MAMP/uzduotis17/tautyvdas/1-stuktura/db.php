<?php

      // uzduotis
      // sukurti f-ja connectDB($HOST, $USERNAME, $PASSWROD, $db_NAME)
      // sukurti f-ja createArticle($connection, $title, $content, $date, $user_ID)
      // sukurti f-ja editeArticle($id_kuri_keiciam, $connection, $title, $content, $date, $user_ID)
      // sukurti f-ja deleteArticle($connection, $id)
      // sukurti f-ja getArticle($connection, $id)
      // sukurti f-ja getArticles($connection)
      // sukurti f-ja getArticlesByTittle($connection, $searchTerm)
            // SELECT * FROM articles
            //   WHERE

      echo "db.php";

      define('HOST', 'localhost');
      define('DB_USERNAME', 'tautvydas06');
      define('DB_PASSWORD', 'tratata');
      define('DB_NAME', 'testuoju');


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

      function createArticle($title, $content, $user_ID) {
          $sql = "INSERT INTO articles
                  VALUES ('', '$title', '$content', NOW(), '$user_ID')";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if( !$status) {
            echo "Neapvyko sukurti straipsnio!!!  <br>";
         } else {
              echo "Sveikiname, Jusu straipsnis sukurtas <br>";
         }
      }
      createArticle("Zuvo geles", "Mociutes darzeli istrype vaikai", 1);


//ALTER TABLE `articles` CHANGE `date` `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;





 ?>
