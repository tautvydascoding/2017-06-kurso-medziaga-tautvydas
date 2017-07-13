<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Databa</h1>
    <?php
    echo "labas <br />";

    // kuriamos konstantos//
    define("SERVERNAME", "localhost");
    define("USERNAME", "mantasman1");
    define("PASSWORD", "sonyso");
    define("DB_NAME", "testuoju");


    $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
    if ($connection) {
      echo "prisijungt prie DB pavyko";
    } else {
      echo "Prisijungt prie DB nepavyko" . mysqli_connect_error() . "<br />";
    }

     ?>

  </body>
</html>
