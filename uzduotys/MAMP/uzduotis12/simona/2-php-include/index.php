<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title> Homepage</title>
  </head>
  <body>
    <!-- Header included -->
    <?php
include_once("./header.php");
?>


<div id="wrapper">
<section>
  <?php
for ($i=0; $i < 3; $i++) {
#6 code...
include("./article.html");
}
   ?>
</section>
</div>

<?php
include_once("./footer.php");
 ?>

  </body>
</html>
