<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mokomes PHP</title>
  </head>
  <body>
<?php
    include_once("./header.php");
    ?>
    <div id="wrapper">
  <section>
        <?php
        for ($i=0; $i < 6; $i++) {
          include("./article.html");
        }
         ?>


      </section>
      </div>
<?php include_once("./footer.php"); ?>
  </body>
</html>
