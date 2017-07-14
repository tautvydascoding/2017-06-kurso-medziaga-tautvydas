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
      define('DB_USERNAME', 'zygis');
      define('DB_PASSWORD', 'ponaipizonai');
      define('DB_NAME', 'testuoju');


      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        // if ( $connection) {
        //   echo " prisijungete sekmingai <br />";
        // } else {
        //   echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        // }
        return $connection;
      }
      // connect_DB();

      function createArticle($title, $content, $user_ID) {
          $sql = "INSERT INTO articles
                  VALUES ('', '$title', '$content', NOW(), '$user_ID')";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if( !$status) {
            echo "Neapvyko sukurti straipsnio!!!" . mysqli_error($connect) . " <br>";
         } else {
              echo "Sveikiname, Jusu straipsnis sukurtas <br>";
         }
      }
      // createArticle("Zuvo geles", "Mociutes darzeli istrype vaikai", 1);

// default time ( bet veikia tik kai darai INSERT naudojant myPhpAdmin)
//ALTER TABLE `articles` CHANGE `date` `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

      function editeArticle($id_kuri_keiciam, $title, $content, $user_ID) {
          $sql = "UPDATE articles
                  SET   title='$title', content='$content', user_ID ='$user_ID'
                  WHERE id = $id_kuri_keiciam";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if( !$status) {
            echo "Neapvyko redaguoti straipsnio!!! ". mysqli_error($connect) . " <br>";
         } else {
              echo "Sveikiname, Jusu straipsnis redaguotas <br>";
         }
      }
      // editeArticle(4,"Zuvis", "Mociutes darzeli istrype kralikai", 2);


       function deleteArticle( $id){
           $sql = "DELETE FROM articles
                   WHERE id = $id";
           $connect = connect_DB();
           $status = mysqli_query($connect, $sql);
           if( !$status) {
             echo "Neapvyko istrinti straipsnio!!! ". mysqli_error($connect) . " <br>";
          } else {
               echo "Sveikiname, Jusu straipsnis istrintas <br>";
          }
       }
      //  deleteArticle(5);

      function getArticle($id) {
            $sql = "SELECT * FROM articles
                    WHERE  id = $id";
            $connect = connect_DB();
            $results = mysqli_query($connect, $sql);

            // mysqli_fetch_assoc - suskaldo gautus rezultatus i masyva (rows)
            $data = mysqli_fetch_assoc($results);
            if( $data > 0 ) {
                // viskas gerai
            } else {
                echo " NR: $id tokio  straipsnio neradome!!! <br>";
            }
            return $data;
      }
      // $straipsnis = getArticle(3);
      // echo "Straipsnio antraste:   " . $straipsnis['title'] . " <br />";

      function getArticles($straipsniuSkaicius = 9999 ) {
            $sql = "SELECT  * FROM articles  LIMIT $straipsniuSkaicius";
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
      $visiStraipsniai = getArticles(4);

      // print_r($visiStraipsniai);
      // $data = mysqli_fetch_assoc($results);

      function getArticlesByTittle($searchTerm ) {
            $sql = " SELECT * FROM articles
                      WHERE title like '%$searchTerm%'; ";
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
      $ieskomasStraipsnis =  getArticlesByTittle("Zuvis");
      //TESTUOJAME
      // print_r($ieskomasStraipsnis); 
      // $data = mysqli_fetch_row($ieskomasStraipsnis);
      // if ($data) {
      //   echo "Radome: " . $data[1] ;
      // } else {
      //   echo "Neradomoe ieskomos frazes <br />";
      // }



 ?>
