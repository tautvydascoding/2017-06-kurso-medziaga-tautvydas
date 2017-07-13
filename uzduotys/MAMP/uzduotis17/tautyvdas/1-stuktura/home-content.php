<?php

    echo " home-content.php <br />";
    include_once('./db.php'); // idedame komandas, kad galetuem jas issaukti
?>


  <section>
          <?php
              $i = 0;
              while ( $i < 7) {

                include('./article.php'); // idedam straipsni

                $i++;
              }
           ?>
  </section>
