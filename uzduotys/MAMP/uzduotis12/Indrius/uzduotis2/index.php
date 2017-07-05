<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PhP testas</title>
  </head>
  <body>
<?php
include_once("./header.php");
?>


 <div id="wapper">
<section>
<?php
for ($i=0; $i < 6; $i++) {
  include("./article.php");
}
 ?>

</section>
</div>

<?php include_once("./footer.php"); ?>

  </body>
</html>
