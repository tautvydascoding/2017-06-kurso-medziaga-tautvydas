<?php
  echo "home-content.php <br />";
  include_once('./db.php');
 ?>

<section>
  <?php
    $i = 0;
    while ( $i <7) {


    include('./article.php');
    $i++;
    }
   ?>

</section>
