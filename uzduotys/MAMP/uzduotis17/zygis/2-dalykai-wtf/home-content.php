<?php

    echo " home-content.php <br />";

    include_once('./db.php');

?>


  <section>


  <?php
  $visistraipsniai = getArticles();
  print_r($visistraipsniai);
  $straipsnis = mysqli_fetch_assoc($visistraipsniai);

  while($straipsnis) {
    $straipsnis = mysqli_fetch_assoc($visistraipsniai);
    //print_r($straipsnis);

  include './article.php';
   $straipsnis = mysqli_fetch_assoc($visistraipsniai);
  }

  ?>

  


  </section>
