<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php
      echo "<h1>Jungsimes prie DB naudojant PHP </h1>";

      // kuriam konstantas saugoti prisijungimo prie DB duomenims
      define("SERVERNAME", "localhost");
      define("USERNAME", "tautvydas06"); // root
      define("PASSWORD", "tratata");  // root
      define("DB_NAME", "testuoju");

      // mysqli_connect  - jungiasi prie DB
       $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
       if ($connection) {
          echo "prisijungti prie DB pavyko  <br>";
       } else {
          echo "Prisijungti prie DB NEPAVYKO!!!" .  mysqli_connect_error() . "<br>";
       }
     ?>

  </body>
</html>
