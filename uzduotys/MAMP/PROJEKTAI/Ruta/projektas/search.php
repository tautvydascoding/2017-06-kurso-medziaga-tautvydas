<?php

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

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <title>Ruta Travels</title>
  </head>
  <body>
    <?php

	  //  $query = $_GET['query'];

    function getArticlesByQuery($query) {
            $sql = "SELECT * FROM articles
                      WHERE ('title' LIKE '%".$query."%') OR ('content' LIKE '%".$query."%')");
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
      $printArticle = getArticlesByQuery($query);
      print_r($printArticle);
      $data = mysqli_fetch_row($printArticle);
      if ($data) {
        include('./article.php');
      } else {
        echo "Neradomoe ieskomos frazes <br />";
      }


	   }
      ?>

    <script src="lib/jquery-3.2.1.min.js" ></script>
    <script src="lib/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
