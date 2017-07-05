<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        echo "<h1>darbas su Static kintamaisiais</h1>";
          $b = 0; // global
          function count2() {
            global $b; // paima uz f-jos ribu esanti knitamaji
            static $a = 0;
            echo "a: " . $a . " b: $b <br>";
            $a++;
            $b++;
          }

          count2();
          count2();
          count2();
          count2();


     ?>


  </body>
</html>
