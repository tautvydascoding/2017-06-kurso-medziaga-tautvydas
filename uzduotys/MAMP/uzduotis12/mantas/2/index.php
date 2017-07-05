<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mokinames PHP include</title>
  </head>
  <body>
    <!-- idedu headeri -->
    <?php include_once("header.php"); ?>

    <section>
    <?php
      for ($i=0; $i < 6; $i++) {
        include ("article.html");
      }
      ?>
    </section>

    <?php
     include_once ("footer.php");

    ?>


  </body>
</html>
