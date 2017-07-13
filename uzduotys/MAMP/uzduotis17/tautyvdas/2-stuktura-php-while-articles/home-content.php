<?php

    echo " home-content.php <br />";
    include_once('./db.php'); // idedame komandas, kad galetuem jas issaukti
?>


  <section>
    <?php
       $visiStraipsniai = getArticles(7);
       // mysqli_fetch - paima is is visu gautu straipsniu viena
       $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
        while ( $straipsnis   ) {
            include('./article.php'); // idedam straipsni

            // !!! mysqli_fetch - paima is is visu gautu straipsniu sekanti
            $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
        }
     ?>
  </section>
