<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
 echo "<h3> Darbas su Static kintamaisiais </h3>";
    $b = 0; //global
    function count2() {
    global $b; //paima uz f-ijos ribu esanti kintamaji
    static $a = 0;
    echo "a: " . $a . " b: $b <br />"; //per viduri issivesti, kad skaiciuotu nuo nulio
    $a++;
    $b++;
    } //sioje vietoje f-ija skaiciuos vel ir vel nuo nulio, istrindama viska priestai. Tokiu atveju galima susikurti kita kintamaji b ir paversti ji globaliu


count2();
count2();
count2();
count2();

 ?>


  </body>
</html>
