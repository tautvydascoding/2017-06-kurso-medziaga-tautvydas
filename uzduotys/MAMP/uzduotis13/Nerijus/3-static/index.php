<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>aaaaaaa</title>
  </head>
  <body>
    <?php
$b = 0;
function count2() {
  global $b;
$a = 0;
echo "a: " . $a . "b: $b <br />";
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
