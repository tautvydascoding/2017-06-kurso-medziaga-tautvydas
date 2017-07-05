<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<h1>darbas</h1>";


    $b = 0;
      function count2()      {
        $a = 0;
        global $b; //paima uz f-jos ribu
        static $a;

        echo "a: $a" . "b: $b <br />";
        $a++;
        $b++;
      }
      count2();
      count2();
      count2();

     ?>

  </body>
</html>
